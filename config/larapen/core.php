<?php
/**
 * JobClass - Job Board Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com/jobclass
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

return [
	
    /*
     |-----------------------------------------------------------------------------------------------
     | The item's ID on CodeCanyon
     |-----------------------------------------------------------------------------------------------
     |
     */
    'itemId' => '18776089',
	
	/*
	 |-----------------------------------------------------------------------------------------------
	 | Purchase code checker URL
	 |-----------------------------------------------------------------------------------------------
	 |
	 */
    'purchaseCodeCheckerUrl' => 'http://api.bedigit.com/envato.php?purchase_code=',
	
	/*
     |-----------------------------------------------------------------------------------------------
     | Purchase Code
     |-----------------------------------------------------------------------------------------------
     |
     */
	'purchaseCode' => env('PURCHASE_CODE', ''),
	
    /*
     |-----------------------------------------------------------------------------------------------
     | Demo Website Info
     |-----------------------------------------------------------------------------------------------
     |
     */
	'demo' => [
		'domain' => 'laraclassifier.com',
		'hosts'  => [
			'jobclass.bedigit.com',
			'jobclass.laraclassifier.com',
		],
	],

	/*
     |-----------------------------------------------------------------------------------------------
     | Database Charset & Collation
     |-----------------------------------------------------------------------------------------------
	 | utf8mb4 & utf8mb4_unicode_ci => MySQL v5.5.3 or greater
	 |
     */
	'database' => [
		'charset'   => [
			'default'     => 'utf8mb4',
			'recommended' => ['utf8', 'utf8mb4'],
		],
		'collation' => [
			'default'     => 'utf8mb4_unicode_ci',
			'recommended' => ['utf8_unicode_ci', 'utf8mb4_unicode_ci'],
		],
	],
	
    /*
     |-----------------------------------------------------------------------------------------------
     | Default Logo
     |-----------------------------------------------------------------------------------------------
     |
     */
    'logo' => 'app/default/logo.png',
	'logoSize' => [
		'default' => [
			'width'  => 216,
			'height' => 40,
		],
		'max' => [
			'width'  => 430,
			'height' => 80,
		],
	],
	
    /*
     |-----------------------------------------------------------------------------------------------
     | Default Favicon
     |-----------------------------------------------------------------------------------------------
     |
     */
    'favicon' => 'app/default/ico/favicon.png',
	
	/*
     |-----------------------------------------------------------------------------------------------
     | Default Skins
     |-----------------------------------------------------------------------------------------------
     |
     */
	'skins' => [
		'default' => [
			'name'  => 'Default',
			'color' => null,
		],
		'blue' => [
			'name'  => 'Blue (~French Blue)',
			'color' => '#4682B4', // lcBlue (#4682B4) | frenchBlue (#0072B5)
		],
		'blueViolet' => [
			'name'  => 'Blue Violet',
			'color' => '#4D87E7',
		],
		'deepPurple' => [
			'name'  => 'Deep Purple',
			'color' => '#673AB7', // purple
		],
		'blueIzis' => [
			'name'  => 'Blue Izis',
			'color' => '#5B5EA6',
		],
		'green' => [
			'name'  => 'Green (~Emerald)',
			'color' => '#028e7b', // Emerald (green)
		],
		'red' => [
			'name'  => 'Red (Grape Fruit)',
			'color' => '#DA4453', // Grape Fruit (red)
		],
		'yellow' => [
			'name'  => 'Yellow (~Sun Flower)',
			'color' => '#FCBB42', // Sun Flower (yellow)
		],
		'riverside' => [
			'name'  => 'Riverside',
			'color' => '#4C6A92', // gray-violet (light)
		],
		'sargassoSea' => [
			'name'  => 'Sargasso Sea',
			'color' => '#485167', // gray-violet
		],
		'indigo' => [
			'name'  => 'Indigo',
			'color' => '#3F51B5', // purple-blue
		],
		'blueJeans' => [
			'name'  => 'Blue Jeans',
			'color' => '#4A89DC', // blue-jeans
		],
		'pink' => [
			'name'  => 'Pink',
			'color' => '#E91E63', // red-purple
		],
		'custom' => [
			'name'  => 'Custom',
			'color' => null,
		],
	],
    
    /*
     |-----------------------------------------------------------------------------------------------
     | Default user profile picture
     |-----------------------------------------------------------------------------------------------
     |
     */
    'photo' => '',

	/*
     |-----------------------------------------------------------------------------------------------
     | Default ads picture & Default ads pictures sizes
     |-----------------------------------------------------------------------------------------------
     |
     */
	'picture' => [
		'default'   => 'app/default/picture.jpg',
		'versioned' => env('PICTURE_VERSIONED', false),
		'version'   => env('PICTURE_VERSION', 1),
		// Other types of picture (Not available in the 'Upload' options in the Admin Panel)
		'otherTypes' => [
			'favicon'   => [
				'width'     => 32,
				'height'    => 32,
			],
			'adminLogo' => [
				'width'  => 300,
				'height' => 40,
			],
			'user'  => [
				'width'  => 800,
				'height' => 800,
			],
			'company'  => [
				'width'  => 800,
				'height' => 800,
			],
			'bgHeader'  => [
				'width'  => 2000,
				'height' => 1000,
			],
			'bgBody'    => [
				'width'  => 2500,
				'height' => 2500,
			],
		],
	],
	
	/*
     |-----------------------------------------------------------------------------------------------
     | TextToImage settings (Used to convert phone numbers to image)
     |-----------------------------------------------------------------------------------------------
     |
	 | format         : IMAGETYPE_JPEG, IMAGETYPE_PNG or IMAGETYPE_GIF
	 | color          : RGB (Example RGB: #FFFFFF = White)
	 | backgroundColor: RGBA or RGB (Examples RGBA: rgba(0,0,0,0.0) = Transparent)
	 | fontFamily     : Fonts Path: /packages/larapen/texttoimage/src/Libraries/font/
	 |
	 | NOTE: Transparent value is only available for PNG format.
	 |
     */
	'textToImage' => [
		'format'          => IMAGETYPE_PNG,
		'color'           => '#FFFFFF',
		'backgroundColor' => 'rgba(0,0,0,0.0)',
		'fontFamily'      => 'FiraSans-Regular.ttf',
		'fontSize'        => 12,
		'padding'         => 0,
		'quality'         => 100,
	],
	
	/*
     |-----------------------------------------------------------------------------------------------
     | Password Length
     |-----------------------------------------------------------------------------------------------
     |
     */
	'passwordLength' => [
		'min' => 6,
		'max' => 60,
	],
    
    /*
     |-----------------------------------------------------------------------------------------------
     | Countries SVG maps folder & URL base
     |-----------------------------------------------------------------------------------------------
     |
     */
    'maps' => [
        'path'    => public_path('images/maps') . DIRECTORY_SEPARATOR,
        'urlBase' => 'images/maps/',
    ],
	
    /*
     |-----------------------------------------------------------------------------------------------
     | Optimize your URLs for SEO (for International website)
     |-----------------------------------------------------------------------------------------------
     |
     | You have to set the variables below in the /.env file:
     |
     | MULTI_COUNTRIES_URLS=true (to enable the multi-countries URLs optimization)
     | HIDE_DEFAULT_LOCALE_IN_URL=false (to show the default language code in the URLs)
     |
     */
	'multiCountriesUrls' => env('MULTI_COUNTRIES_URLS', false),
	
	/*
     |--------------------------------------------------------------------------
     | Force links to use the HTTPS protocol
     |--------------------------------------------------------------------------
     |
     */
	'forceHttps' => env('FORCE_HTTPS', false),

	/*
     |-----------------------------------------------------------------------------------------------
     | No Cache Headers - Redirect (Prevent Browser cache)
     |-----------------------------------------------------------------------------------------------
     | 'Cache-Control' => 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0', // IE.
	 |
     */
	'noCacheHeaders' => [
		'Cache-Control' => 'no-store, no-cache, must-revalidate', // HTTP 1.1.
		'Pragma'        => 'no-cache', // HTTP 1.0.
		'Expires'       => 'Sun, 02 Jan 1990 05:00:00 GMT', // Proxies. (Date in the past)
		'Last-Modified' => gmdate('D, d M Y H:i:s') . ' GMT',
	],

	/*
     |-----------------------------------------------------------------------------------------------
     | Storing user's selected|preferred language in: cookie or session
     |-----------------------------------------------------------------------------------------------
     | Possible value: cookie, session
	 |
     */
	'storingUserSelectedLang' => 'cookie',
	
    /*
     |-----------------------------------------------------------------------------------------------
     | Plugins Path & Namespace
     |-----------------------------------------------------------------------------------------------
     |
     */
    'plugin' => [
		'path'      => base_path('extras/plugins') . DIRECTORY_SEPARATOR,
		'namespace' => '\\extras\plugins\\',
    ],
	
	'customizedViewPath' => 'views.',
	
    /*
     |-----------------------------------------------------------------------------------------------
     | Managing User's Fields (Phone, Email & Username)
     |-----------------------------------------------------------------------------------------------
     |
     | When 'disable.phone' and 'disable.email' are TRUE,
     | the script use the email field by default.
     |
     */
    'disable' => [
        'phone'    => env('DISABLE_PHONE', true),
        'email'    => env('DISABLE_EMAIL', false),
        'username' => env('DISABLE_USERNAME', true),
    ],
	
    /*
     |-----------------------------------------------------------------------------------------------
     | Disallowing usernames that match reserved names
     |-----------------------------------------------------------------------------------------------
     | This list was take from the following repo: https://github.com/dsignr/disallowed-usernames/
     | You can add your own disallowed usernames. Separate words with commas and no spaces.
     */
    'reservedUsernames' => 'json,rss,wellknown,xml,about,abuse,access,account,accounts,activate,ad,add,address,adm,admin,administration,administrator,ads,adult,advertising,affiliate,affiliates,ajax,analytics,android,anon,anonymous,api,app,apps,archive,atom,auth,authentication,avatar,backup,bad,banner,banners,best,beta,billing,bin,blackberry,blog,blogs,board,bot,bots,business,cache,calendar,campaign,career,careers,cart,cdn,cgi,chat,chef,client,clients,code,codes,commercial,compare,config,connect,contact,contact-us,contest,cookie,corporate,create,crossdomain,crossdomain.xml,css,customer,dash,dashboard,data,database,db,delete,demo,design,designer,dev,devel,developer,developers,development,dir,directory,dmca,doc,docs,documentation,domain,download,downloads,ecommerce,edit,editor,email,embed,enterprise,facebook,faq,favorite,favorites,favourite,favourites,feed,feedback,feeds,file,files,follow,font,fonts,forum,forums,free,ftp,gadget,gadgets,games,gift,good,google,group,groups,guest,help,helpcenter,home,homepage,host,hosting,hostname,html,http,httpd,https,image,images,imap,img,index,indice,info,information,intranet,invite,ipad,iphone,irc,java,javascript,job,jobs,js,json,knowledgebase,legal,license,list,lists,log,login,logout,logs,mail,manager,manifesto,marketing,master,me,media,message,messages,messenger,mine,mob,mobile,msg,must,mx,my,mysql,name,named,net,network,new,newest,news,newsletter,notes,oembed,old,oldest,online,operator,order,orders,page,pager,pages,panel,password,perl,photo,photos,php,pic,pics,plan,plans,plugin,plugins,pop,pop3,post,postfix,postmaster,posts,press,pricing,privacy,privacy-policy,profile,project,projects,promo,pub,public,python,random,recipe,recipes,register,registration,remove,request,reset,robots,robots.txt,rss,root,ruby,sale,sales,sample,samples,save,script,scripts,search,secure,security,send,service,services,setting,settings,setup,shop,shopping,signin,signup,site,sitemap,sitemap.xml,sites,smtp,sql,ssh,stage,staging,start,stat,static,stats,status,store,stores,subdomain,subscribe,support,surprise,svn,sys,sysop,system,tablet,tablets,talk,task,tasks,tech,telnet,terms,terms-of-use,test,test1,test2,test3,tests,theme,themes,tmp,todo,tools,top,trust,tv,twitter,twittr,unsubscribe,update,upload,url,usage,user,username,users,video,videos,visitor,web,weblog,webmail,webmaster,website,websites,welcome,wiki,win,ww,wws,www,www1,www2,www3,www4,www5,www6,www7,wwws,wwww,xml,xpg,xxx,yahoo,you,yourdomain,yourname,yoursite,yourusername,lang',
    
    /*
     |-----------------------------------------------------------------------------------------------
     | Custom Prefix for the new locations (Administrative Divisions) Codes
     |-----------------------------------------------------------------------------------------------
     |
     */
    'locationCodePrefix' => 'Z',

	/*
     |-----------------------------------------------------------------------------------------------
     | Date & Datetime Format
	 |-----------------------------------------------------------------------------------------------
     | Accepted formats:
     | - ISO Format: https://carbon.nesbot.com/docs/#api-localization
     | - PHP-specific dates formats
     |     |- DateTimeInterface::format():https://www.php.net/manual/en/datetime.format.php
     |     |- strftime(): https://www.php.net/manual/en/function.strftime.php
	 |
	 | Worldwide Date and Time Formats: https://www.timeandunits.com/time-and-date-format.html
	 |
     */
	'dateFormat' => [
		'default' => 'YYYY-MM-DD',
		'php'     => 'Y-m-d',
	],
	'datetimeFormat' => [
		'default' => 'YYYY-MM-DD HH:mm',
		'php'     => 'Y-m-d H:i',
	],

	/*
     |-----------------------------------------------------------------------------------------------
     | Permalinks & Extensions
     |-----------------------------------------------------------------------------------------------
     |
     */
	'permalink' => [
		'post' => [
			'{slug}-{hashableId}',
			'{slug}/{hashableId}',
			'{slug}_{hashableId}',
			'{hashableId}-{slug}',
			'{hashableId}/{slug}',
			'{hashableId}_{slug}',
			'{hashableId}',
		],
	],
	'permalinkExt' => [
		'',
		'.html',
		'.htm',
		'.php',
		'.asp',
		'.aspx',
		'.jsp',
	],
	'hashableIdPrefix' => '',
	
	/*
     |-----------------------------------------------------------------------------------------------
     | Maintenance Mode IP Whitelist
     |-----------------------------------------------------------------------------------------------
	 |
	 | e.g. ['127.0.0.1', '::1', '175.12.103.14', ...]
     |
     */
	'exceptOwnIp' => [
		//...
	],
	
	/*
     |-----------------------------------------------------------------------------------------------
     | IP Address Link Creation Base
     |-----------------------------------------------------------------------------------------------
	 |
	 | example: https://whatismyipaddress.com/ip/127.0.0.1
     |
     */
	'ipLinkBase' => 'https://whatismyipaddress.com/ip/',
	
	/*
     |-----------------------------------------------------------------------------------------------
     | During employer contacting, candidates can select a resume from their last 5 resumes.
	 | You can change this number to display more or less resumes during the selection
     |-----------------------------------------------------------------------------------------------
     |
     */
	'selectResumeInto' => 5,
	
	/*
     |-----------------------------------------------------------------------------------------------
     | Register process settings
     |-----------------------------------------------------------------------------------------------
     |
     */
	'register' => [
		'showCompanyFields' => env('REGISTER_SHOW_COMPANY_FIELDS', false), // Show/Hide Company fields from Registration Form depending of the User Type
		'showResumeFields'  => env('REGISTER_SHOW_RESUME_FIELDS', false), // Show/Hide Resume fields from Registration Form depending of the User Type
	],
	
];
