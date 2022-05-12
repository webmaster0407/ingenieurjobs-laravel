# Threads


## Store thread


Start a conversation. Creation of a new thread.

> Example request:

```bash
curl -X POST \
    "https://jobclass.laraclassifier.local/api/threads" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=" \
    -H "X-AppType: docs" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -F "from_name=John Doe" \
    -F "from_email=john.doe@domain.tld" \
    -F "from_phone=nulla" \
    -F "body=Modi temporibus voluptas expedita voluptatibus voluptas veniam." \
    -F "post_id=2" \
    -F "resume[filename]=cum" \
    -F "captcha_key=enim" \
    -F "filename=@/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpxhuhsZ" 
```

```javascript
const url = new URL(
    "https://jobclass.laraclassifier.local/api/threads"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=",
    "X-AppType": "docs",
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
};

const body = new FormData();
body.append('from_name', 'John Doe');
body.append('from_email', 'john.doe@domain.tld');
body.append('from_phone', 'nulla');
body.append('body', 'Modi temporibus voluptas expedita voluptatibus voluptas veniam.');
body.append('post_id', '2');
body.append('resume[filename]', 'cum');
body.append('captcha_key', 'enim');
body.append('filename', document.querySelector('input[name="filename"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://jobclass.laraclassifier.local/api/threads',
    [
        'headers' => [
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=',
            'X-AppType' => 'docs',
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
        ],
        'multipart' => [
            [
                'name' => 'from_name',
                'contents' => 'John Doe'
            ],
            [
                'name' => 'from_email',
                'contents' => 'john.doe@domain.tld'
            ],
            [
                'name' => 'from_phone',
                'contents' => 'nulla'
            ],
            [
                'name' => 'body',
                'contents' => 'Modi temporibus voluptas expedita voluptatibus voluptas veniam.'
            ],
            [
                'name' => 'post_id',
                'contents' => '2'
            ],
            [
                'name' => 'resume[filename]',
                'contents' => 'cum'
            ],
            [
                'name' => 'captcha_key',
                'contents' => 'enim'
            ],
            [
                'name' => 'filename',
                'contents' => fopen('/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpxhuhsZ', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-POSTapi-threads" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-threads"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-threads"></code></pre>
</div>
<div id="execution-error-POSTapi-threads" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-threads"></code></pre>
</div>
<form id="form-POSTapi-threads" data-method="POST" data-path="api/threads" data-authed="0" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=","X-AppType":"docs","Authorization":"Bearer {YOUR_AUTH_TOKEN}"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-threads', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-threads" onclick="tryItOut('POSTapi-threads');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-threads" onclick="cancelTryOut('POSTapi-threads');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-threads" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/threads</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>from_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="from_name" data-endpoint="POSTapi-threads" data-component="body" required  hidden>
<br>
The thread's creator name.
</p>
<p>
<b><code>from_email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="from_email" data-endpoint="POSTapi-threads" data-component="body"  hidden>
<br>
The thread's creator email address (required if mobile phone number doesn't exist).
</p>
<p>
<b><code>from_phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="from_phone" data-endpoint="POSTapi-threads" data-component="body"  hidden>
<br>
The thread's creator mobile phone number (required if email doesn't exist).
</p>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="POSTapi-threads" data-component="body" required  hidden>
<br>
The name of the user.
</p>
<p>
<b><code>post_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="post_id" data-endpoint="POSTapi-threads" data-component="body" required  hidden>
<br>
The related post ID.
</p>
<p>
<details>
<summary>
<b><code>resume</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>

</summary>
<br>
<p>
<b><code>resume.filename</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="resume.filename" data-endpoint="POSTapi-threads" data-component="body" required  hidden>
<br>

</p>
</details>
</p>
<p>
<b><code>filename</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="filename" data-endpoint="POSTapi-threads" data-component="body"  hidden>
<br>
The thread attached file.
</p>
<p>
<b><code>captcha_key</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="captcha_key" data-endpoint="POSTapi-threads" data-component="body"  hidden>
<br>
Key generated by the CAPTCHA endpoint calling (Required if the CAPTCHA verification is enabled from the Admin panel).
</p>

</form>


## List threads

<small class="badge badge-darkred">requires authentication</small>

Get all logged user's threads
Filters:
- unread: Get the logged user's unread threads
- started: Get the logged user's started threads
- important: Get the logged user's make as important threads

> Example request:

```bash
curl -X GET \
    -G "https://jobclass.laraclassifier.local/api/threads?filter=unread&embed=null&perPage=2" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://jobclass.laraclassifier.local/api/threads"
);

let params = {
    "filter": "unread",
    "embed": "null",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=",
    "X-AppType": "docs",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://jobclass.laraclassifier.local/api/threads',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'filter'=> 'unread',
            'embed'=> 'null',
            'perPage'=> '2',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-GETapi-threads" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-threads"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-threads"></code></pre>
</div>
<div id="execution-error-GETapi-threads" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-threads"></code></pre>
</div>
<form id="form-GETapi-threads" data-method="GET" data-path="api/threads" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-threads', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-threads" onclick="tryItOut('GETapi-threads');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-threads" onclick="cancelTryOut('GETapi-threads');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-threads" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/threads</code></b>
</p>
<p>
<label id="auth-GETapi-threads" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-threads" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>filter</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter" data-endpoint="GETapi-threads" data-component="query"  hidden>
<br>
Filter for the list - Possible value: unread, started or important.
</p>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-threads" data-component="query"  hidden>
<br>
Comma-separated list of the post relationships for Eager Loading - Possible values: post.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-threads" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>


## Get thread

<small class="badge badge-darkred">requires authentication</small>

Get a thread (owned by the logged user) details

> Example request:

```bash
curl -X GET \
    -G "https://jobclass.laraclassifier.local/api/threads/2?embed=null" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://jobclass.laraclassifier.local/api/threads/2"
);

let params = {
    "embed": "null",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=",
    "X-AppType": "docs",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://jobclass.laraclassifier.local/api/threads/2',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'embed'=> 'null',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-GETapi-threads--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-threads--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-threads--id-"></code></pre>
</div>
<div id="execution-error-GETapi-threads--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-threads--id-"></code></pre>
</div>
<form id="form-GETapi-threads--id-" data-method="GET" data-path="api/threads/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-threads--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-threads--id-" onclick="tryItOut('GETapi-threads--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-threads--id-" onclick="cancelTryOut('GETapi-threads--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-threads--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/threads/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-threads--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-threads--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-threads--id-" data-component="url" required  hidden>
<br>
The thread ID.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-threads--id-" data-component="query"  hidden>
<br>
Comma-separated list of the post relationships for Eager Loading - Possible values: user,post,messages,participants.
</p>
</form>


## Update thread

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X PUT \
    "https://jobclass.laraclassifier.local/api/threads/aspernatur" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=" \
    -H "X-AppType: docs" \
    -F "body=Modi temporibus voluptas expedita voluptatibus voluptas veniam." \
    -F "filename=@/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpREFHY5" 
```

```javascript
const url = new URL(
    "https://jobclass.laraclassifier.local/api/threads/aspernatur"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=",
    "X-AppType": "docs",
};

const body = new FormData();
body.append('body', 'Modi temporibus voluptas expedita voluptatibus voluptas veniam.');
body.append('filename', document.querySelector('input[name="filename"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'https://jobclass.laraclassifier.local/api/threads/aspernatur',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=',
            'X-AppType' => 'docs',
        ],
        'multipart' => [
            [
                'name' => 'body',
                'contents' => 'Modi temporibus voluptas expedita voluptatibus voluptas veniam.'
            ],
            [
                'name' => 'filename',
                'contents' => fopen('/private/var/folders/r0/k0xbnx757k3fnz09_6g9rp6w0000gn/T/phpREFHY5', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-PUTapi-threads--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-threads--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-threads--id-"></code></pre>
</div>
<div id="execution-error-PUTapi-threads--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-threads--id-"></code></pre>
</div>
<form id="form-PUTapi-threads--id-" data-method="PUT" data-path="api/threads/{id}" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"multipart\/form-data","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-threads--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-threads--id-" onclick="tryItOut('PUTapi-threads--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-threads--id-" onclick="cancelTryOut('PUTapi-threads--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-threads--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/threads/{id}</code></b>
</p>
<p>
<label id="auth-PUTapi-threads--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTapi-threads--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-threads--id-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>body</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="body" data-endpoint="PUTapi-threads--id-" data-component="body" required  hidden>
<br>
The name of the user.
</p>
<p>
<b><code>filename</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="filename" data-endpoint="PUTapi-threads--id-" data-component="body"  hidden>
<br>
The thread attached file.
</p>

</form>


## Delete thread(s)

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X DELETE \
    "https://jobclass.laraclassifier.local/api/threads/ex" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://jobclass.laraclassifier.local/api/threads/ex"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=",
    "X-AppType": "docs",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'https://jobclass.laraclassifier.local/api/threads/ex',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=',
            'X-AppType' => 'docs',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-DELETEapi-threads--ids-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-threads--ids-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-threads--ids-"></code></pre>
</div>
<div id="execution-error-DELETEapi-threads--ids-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-threads--ids-"></code></pre>
</div>
<form id="form-DELETEapi-threads--ids-" data-method="DELETE" data-path="api/threads/{ids}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-threads--ids-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-threads--ids-" onclick="tryItOut('DELETEapi-threads--ids-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-threads--ids-" onclick="cancelTryOut('DELETEapi-threads--ids-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-threads--ids-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/threads/{ids}</code></b>
</p>
<p>
<label id="auth-DELETEapi-threads--ids-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEapi-threads--ids-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ids</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ids" data-endpoint="DELETEapi-threads--ids-" data-component="url" required  hidden>
<br>
The ID or comma-separated IDs list of thread(s).
</p>
</form>


## Bulk updates

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "https://jobclass.laraclassifier.local/api/threads/bulkUpdate/in?type=non" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://jobclass.laraclassifier.local/api/threads/bulkUpdate/in"
);

let params = {
    "type": "non",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=",
    "X-AppType": "docs",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'https://jobclass.laraclassifier.local/api/threads/bulkUpdate/in',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'type'=> 'non',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-POSTapi-threads-bulkUpdate--ids--" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-threads-bulkUpdate--ids--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-threads-bulkUpdate--ids--"></code></pre>
</div>
<div id="execution-error-POSTapi-threads-bulkUpdate--ids--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-threads-bulkUpdate--ids--"></code></pre>
</div>
<form id="form-POSTapi-threads-bulkUpdate--ids--" data-method="POST" data-path="api/threads/bulkUpdate/{ids?}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-threads-bulkUpdate--ids--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-threads-bulkUpdate--ids--" onclick="tryItOut('POSTapi-threads-bulkUpdate--ids--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-threads-bulkUpdate--ids--" onclick="cancelTryOut('POSTapi-threads-bulkUpdate--ids--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-threads-bulkUpdate--ids--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/threads/bulkUpdate/{ids?}</code></b>
</p>
<p>
<label id="auth-POSTapi-threads-bulkUpdate--ids--" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTapi-threads-bulkUpdate--ids--" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>ids</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="ids" data-endpoint="POSTapi-threads-bulkUpdate--ids--" data-component="url" required  hidden>
<br>
The ID or comma-separated IDs list of thread(s).
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="POSTapi-threads-bulkUpdate--ids--" data-component="query" required  hidden>
<br>
The type of action to execute (markAsRead, markAsUnread, markAsImportant, markAsNotImportant or markAllAsRead).
</p>
</form>


## List messages

<small class="badge badge-darkred">requires authentication</small>

Get all thread's messages

> Example request:

```bash
curl -X GET \
    -G "https://jobclass.laraclassifier.local/api/threads/293/messages?embed=null&sort=created_at&perPage=2" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://jobclass.laraclassifier.local/api/threads/293/messages"
);

let params = {
    "embed": "null",
    "sort": "created_at",
    "perPage": "2",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=",
    "X-AppType": "docs",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://jobclass.laraclassifier.local/api/threads/293/messages',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'embed'=> 'null',
            'sort'=> 'created_at',
            'perPage'=> '2',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-GETapi-threads--threadId--messages" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-threads--threadId--messages"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-threads--threadId--messages"></code></pre>
</div>
<div id="execution-error-GETapi-threads--threadId--messages" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-threads--threadId--messages"></code></pre>
</div>
<form id="form-GETapi-threads--threadId--messages" data-method="GET" data-path="api/threads/{threadId}/messages" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-threads--threadId--messages', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-threads--threadId--messages" onclick="tryItOut('GETapi-threads--threadId--messages');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-threads--threadId--messages" onclick="cancelTryOut('GETapi-threads--threadId--messages');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-threads--threadId--messages" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/threads/{threadId}/messages</code></b>
</p>
<p>
<label id="auth-GETapi-threads--threadId--messages" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-threads--threadId--messages" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>threadId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="threadId" data-endpoint="GETapi-threads--threadId--messages" data-component="url" required  hidden>
<br>
The thread's ID.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-threads--threadId--messages" data-component="query"  hidden>
<br>
Comma-separated list of the post relationships for Eager Loading - Possible values: user.
</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETapi-threads--threadId--messages" data-component="query"  hidden>
<br>
The sorting parameter (Order by DESC with the given column. Use "-" as prefix to order by ASC). Possible values: created_at.
</p>
<p>
<b><code>perPage</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="perPage" data-endpoint="GETapi-threads--threadId--messages" data-component="query"  hidden>
<br>
Items per page. Can be defined globally from the admin settings. Cannot be exceeded 100.
</p>
</form>


## Get message

<small class="badge badge-darkred">requires authentication</small>

Get a thread's message (owned by the logged user) details

> Example request:

```bash
curl -X GET \
    -G "https://jobclass.laraclassifier.local/api/threads/293/messages/3545?embed=null" \
    -H "Authorization: Bearer {YOUR_AUTH_TOKEN}" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Content-Language: en" \
    -H "X-AppApiToken: a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=" \
    -H "X-AppType: docs"
```

```javascript
const url = new URL(
    "https://jobclass.laraclassifier.local/api/threads/293/messages/3545"
);

let params = {
    "embed": "null",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_TOKEN}",
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Content-Language": "en",
    "X-AppApiToken": "a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=",
    "X-AppType": "docs",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'https://jobclass.laraclassifier.local/api/threads/293/messages/3545',
    [
        'headers' => [
            'Authorization' => 'Bearer {YOUR_AUTH_TOKEN}',
            'Accept' => 'application/json',
            'Content-Language' => 'en',
            'X-AppApiToken' => 'a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=',
            'X-AppType' => 'docs',
        ],
        'query' => [
            'embed'=> 'null',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


<div id="execution-results-GETapi-threads--threadId--messages--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-threads--threadId--messages--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-threads--threadId--messages--id-"></code></pre>
</div>
<div id="execution-error-GETapi-threads--threadId--messages--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-threads--threadId--messages--id-"></code></pre>
</div>
<form id="form-GETapi-threads--threadId--messages--id-" data-method="GET" data-path="api/threads/{threadId}/messages/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_TOKEN}","Content-Type":"application\/json","Accept":"application\/json","Content-Language":"en","X-AppApiToken":"a25ydDlKdDRwT2wzYjAxV1hvc0hSUmQxYklTTE1pRHU=","X-AppType":"docs"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-threads--threadId--messages--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-threads--threadId--messages--id-" onclick="tryItOut('GETapi-threads--threadId--messages--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-threads--threadId--messages--id-" onclick="cancelTryOut('GETapi-threads--threadId--messages--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-threads--threadId--messages--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/threads/{threadId}/messages/{id}</code></b>
</p>
<p>
<label id="auth-GETapi-threads--threadId--messages--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-threads--threadId--messages--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>threadId</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="threadId" data-endpoint="GETapi-threads--threadId--messages--id-" data-component="url" required  hidden>
<br>
The thread's ID.
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-threads--threadId--messages--id-" data-component="url" required  hidden>
<br>
The thread's message's ID.
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>embed</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="embed" data-endpoint="GETapi-threads--threadId--messages--id-" data-component="query"  hidden>
<br>
Comma-separated list of the post relationships for Eager Loading - Possible values: thread,user.
</p>
</form>



