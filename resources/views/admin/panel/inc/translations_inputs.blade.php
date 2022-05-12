<div class="row input-group">
	{{-- Selected Language Key --}}
	<?php
	$labelFor = htmlentities($key);
	$label = $key;
	echo Form::label($labelFor, $label, [
		'class' => 'col-sm-2 col-form-label fw-bold text-end wordwrap'
	]);
	?>
	
	{{-- Master Language Text --}}
	<div class="hidden-sm hidden-xs col-md-5">
		<div class="card bg-light rounded">
			<div class="card-body">
				<?php
				if (is_array($parents) && count($parents)) {
					$parentsArray = implode('.', $parents);
					$stringText = trans($langFileName . '.' . $parentsArray . '.' . $key);
				} else {
					$stringText = trans($langFileName . '.' . $key);
				}
				echo htmlentities($stringText);
				?>
			</div>
		</div>
	</div>
	
	{{-- Selected Language Text (textarea) --}}
	<div class="col-sm-10 col-md-5">
		<?php
		$fieldName = (empty($parents) ? $key : implode('__', $parents) . "__{$key}");
		$fieldNameEnc = md5($fieldName);
		
		if (preg_match('/(\|)/u', $item)) {
			$subItems = explode('|', $item);
			
			echo '<div style="margin-left: 15px;">';
			foreach ($subItems as $k => $subItem) {
				preg_match('/^({\w}|\[[\w,]+\])([\w\s:]+)/u', trim($subItem), $m);
				
				$subLabelFor = htmlentities($subItem);
				
				if (empty($m)) {
					$subItemLabel = (!$k ? trans('admin.singular') : trans('admin.plural'));
					echo Form::label($subLabelFor, $subItemLabel . ":");
					
					$subFieldNameEnc = $fieldNameEnc . "[after][]";
					$subFieldValue = convertUTF8HtmlToAnsi($subItem);
					echo Form::textarea($subFieldNameEnc, $subFieldValue, ['class' => 'form-control', 'rows' => 2]) . '<br>';
					echo Form::hidden('savedKeys[' . $fieldNameEnc . ']', $fieldName);
				} else {
					$subItemLabel = (!$k ? trans('admin.singular') : trans('admin.plural')) . ' (' . $m[1] . ')';
					echo Form::label($subLabelFor, $subItemLabel . ":");
					
					$subHiddenFieldNameEnc = $fieldNameEnc . "[before][]";
					$subHiddenFieldValue = convertUTF8HtmlToAnsi($m[1]);
					echo Form::hidden($subHiddenFieldNameEnc, $subHiddenFieldValue);
					echo Form::hidden('savedKeys[' . $fieldNameEnc . ']', $fieldName);
					
					$subFieldNameEnc = $fieldNameEnc . "[after][]";
					$subFieldValue = convertUTF8HtmlToAnsi($m[2]);
					echo Form::textarea($subFieldNameEnc, $subFieldValue, ['class' => 'form-control', 'rows' => 2]) . '<br>';
					echo Form::hidden('savedKeys[' . $fieldNameEnc . ']', $fieldName);
				}
			}
			echo '</div>';
		} else {
			$fieldValue = convertUTF8HtmlToAnsi($item);
			echo Form::textarea($fieldNameEnc, $fieldValue, ['class' => 'form-control', 'rows' => 2]) . "<br>";
			echo Form::hidden('savedKeys[' . $fieldNameEnc . ']', $fieldName);
		}
		?>
	</div>
</div>
