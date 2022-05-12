@extends('admin.layouts.master')

@section('header')
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h2 class="mb-0">
                <span class="text-capitalize">{!! $xPanel->entityNamePlural !!}</span>
                <small>{{ trans('admin.reorder') }}</small>
            </h2>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-flex justify-content-end">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="{{ admin_url() }}">{{ trans('admin.dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ url($xPanel->route) }}" class="text-capitalize">{!! $xPanel->entityNamePlural !!}</a></li>
                <li class="breadcrumb-item active d-flex align-items-center">{{ trans('admin.reorder') }}</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <?php
    function treeElement($entry, $key, $allEntries, $xPanel)
    {
        if (!isset($entry->treeElementShown)) {
            // mark the element as shown
            $allEntries[$key]->treeElementShown = true;
            $entry->treeElementShown = true;

            // show the tree element
            echo '<li class="tab-pane" id="list_' . $entry->getKey() . '">';
            if (Str::contains($xPanel->reorderLabel, '.')) {
                $tmp = explode('.', $xPanel->reorderLabel);
                $relation = head($tmp);
                $reorderLabel = last($tmp);
                echo '<div><span class="disclose"><span></span></span>'.$entry->{$relation}->{$reorderLabel}.'</div>';
            } else {
                echo '<div><span class="disclose"><span></span></span>'.$entry->{$xPanel->reorderLabel}.'</div>';
            }

            // see if this element has any children
            $children = [];
            foreach ($allEntries as $key => $subEntry) {
                if ($subEntry->parent_id == $entry->getKey()) {
                    $children[] = $subEntry;
                }
            }

            $children = collect($children)->sortBy('lft');

            // if it does have children, show them
            if (count($children)) {
                echo '<ol>';
                foreach ($children as $key => $child) {
                    $children[$key] = treeElement($child, $child->getKey(), $allEntries, $xPanel);
                }
                echo '</ol>';
            }
            echo '</li>';
        }

        return $entry;
    }
    ?>
    <div class="flex-row d-flex justify-content-center">
        <?php
        $colMd = config('settings.style.admin_boxed_layout') == '1' ? ' col-md-12' : ' col-md-10';
        ?>
        <div class="col-sm-12{{ $colMd }}">
            @if ($xPanel->hasAccess('list'))
                <a href="{{ url($xPanel->route) }}" class="btn btn-primary shadow">
                    <i class="fa fa-angle-double-left"></i> {{ trans('admin.back_to_all') }}
                    <span class="text-lowercase">{!! $xPanel->entityNamePlural !!}</span>
                </a>
                <br><br>
            @endif
            
            {{-- Default box --}}
            <div class="card border-primary">
                <div class="card-header">
                    <h3>{!! trans('admin.reorder') . ' ' . $xPanel->entityNamePlural !!}</h3>
                </div>
                <div class="card-body n-sortable">
                    
                    <p>{{ trans('admin.reorder_text') }}</p>
                    
                    @if (request()->is('*/categories/reorder') or request()->is('*/subcategories/reorder'))
                        <div class="card text-white bg-info rounded mb-0">
                            <div class="card-body">
                                {{ trans('admin.reorder_rebuilding_nodes') }}
                            </div>
                        </div>
                    @endif
                    
                    <div class="row">
                        <?php
                        $colLg = config('settings.style.admin_boxed_layout') == '1' ? ' col-lg-10' : ' col-lg-6';
                        ?>
                        <div class="col-md-12{{ $colLg }}">
                            
                            <ol class="sortable">
                                <?php
                                $allEntries = collect($entries->all())->sortBy('lft')->keyBy($xPanel->getModel()->getKeyName());
                                $rootEntries = $allEntries->filter(function($item) use ($parent_id) {
                                    return $item->parent_id == $parent_id;
                                });
                                ?>
                                @foreach ($rootEntries as $key => $entry)
                                    <?php
                                    $rootEntries[$key] = treeElement($entry, $key, $allEntries, $xPanel);
                                    ?>
                                @endforeach
                            </ol>
                            
                            <button id="toArray" class="btn btn-primary shadow ladda-button" data-style="zoom-in">
                                <span class="ladda-label"><i class="fa fa-save"></i> {{ trans('admin.save') }}</span>
                            </button>
                            
                        </div>
                    </div>
                    
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
@endsection

@section('after_styles')
    <link href="{{ asset('assets/plugins/nestedSortable/nestedSortable.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('after_scripts')
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js" type="text/javascript"></script>
    <script src="{{ url('assets/plugins/nestedSortable/jquery.mjs.nestedSortable2.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {

            // initialize the nested sortable plugin
            $('.sortable').nestedSortable({
                forcePlaceholderSize: true,
                handle: 'div',
                helper: 'clone',
                items: 'li',
                opacity: .6,
                placeholder: 'placeholder',
                revert: 250,
                tabSize: 25,
                tolerance: 'pointer',
                toleranceElement: '> div',
                maxLevels: {{ $xPanel->reorderMaxLevel ?? 3 }},

                isTree: true,
                expandOnHover: 700,
                startCollapsed: false
            });

            $('.disclose').on('click', function() {
                $(this).closest('li').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
            });

            $('#toArray').click(function(e){
                // get the current tree order
                arraied = $('ol.sortable').nestedSortable('toArray', {startDepthCount: 0});

                // log it
                console.log(arraied);

                // send it with POST
                $.ajax({
                    url: '{{ request()->url() }}',
                    type: 'POST',
                    data: { tree: arraied },
                })
                    .done(function() {
                        console.log("success");
                        new PNotify.alert({
                            title: "{{ trans('admin.reorder_success_title') }}",
                            text: "{{ trans('admin.reorder_success_message') }}",
                            type: "success"
                        });
                    })
                    .fail(function() {
                        console.log("error");
                        new PNotify.alert({
                            title: "{{ trans('admin.reorder_error_title') }}",
                            text: "{{ trans('admin.reorder_error_message') }}",
                            type: "danger"
                        });
                    })
                    .always(function() {
                        console.log("complete");
                    });

            });

            $.ajaxPrefilter(function(options, originalOptions, xhr) {
                var token = $('meta[name="csrf_token"]').attr('content');

                if (token) {
                    return xhr.setRequestHeader('X-XSRF-TOKEN', token);
                }
            });

        });
    </script>
@endsection