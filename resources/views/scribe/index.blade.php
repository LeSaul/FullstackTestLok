<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Lok Restaurants</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>


    <script src="{{ asset("vendor/scribe/js/theme-default-3.24.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="restaurants">
                    <a href="#restaurants">Restaurants</a>
                </li>
                                    <ul id="tocify-subheader-restaurants" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="restaurants-GETapi-v1-restaurants">
                        <a href="#restaurants-GETapi-v1-restaurants">Get Restaurants</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="restaurants-GETapi-v1-restaurants--id-">
                        <a href="#restaurants-GETapi-v1-restaurants--id-">Get Restaurant</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: February 21 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost:8000</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="restaurants">Restaurants</h1>

    <p>APIs for get users</p>

            <h2 id="restaurants-GETapi-v1-restaurants">Get Restaurants</h2>

<p>
</p>

<p>Retrieve all restaurants</p>

<span id="example-requests-GETapi-v1-restaurants">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/restaurants" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/restaurants"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-restaurants">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;current_page&quot;: 1,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;uuid&quot;: &quot;f3742fd1-6ce8-4dd7-9757-b96e4b7cf8da&quot;,
            &quot;name&quot;: &quot;Kshlerin Inc&quot;,
            &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;contact&quot;: {
                &quot;id&quot;: 1,
                &quot;uuid&quot;: &quot;3bf5c1fc-b914-42cf-92b4-e4d2fb7168b4&quot;,
                &quot;restaurant_id&quot;: 1,
                &quot;site&quot;: &quot;https://example.com&quot;,
                &quot;email&quot;: &quot;osborne56@gmail.com&quot;,
                &quot;phone&quot;: &quot;(866) 629-7915&quot;,
                &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
            },
            &quot;address&quot;: {
                &quot;id&quot;: 1,
                &quot;uuid&quot;: &quot;c8be4360-d9f9-4ffe-8614-8dbc4d31281e&quot;,
                &quot;restaurant_id&quot;: 1,
                &quot;street&quot;: &quot;64426 Lorena Inlet Suite 110&quot;,
                &quot;city&quot;: &quot;Gusikowskiburgh&quot;,
                &quot;state&quot;: &quot;Missouri&quot;,
                &quot;location&quot;: &quot;{\&quot;lat\&quot;: 13.124585, \&quot;long\&quot;: -81.526242}&quot;,
                &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
            },
            &quot;ratings&quot;: [
                {
                    &quot;id&quot;: 1,
                    &quot;uuid&quot;: &quot;f1708c22-d83d-449d-bb49-b7550bea3c1c&quot;,
                    &quot;restaurant_id&quot;: 1,
                    &quot;rate&quot;: 2,
                    &quot;comments&quot;: &quot;Fuga vel quia iste nisi quod molestias. Soluta id perferendis at consequatur sed. Ab aut non omnis voluptatibus. Eum et et quia rerum.&quot;,
                    &quot;name&quot;: &quot;Rocky Eichmann&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                },
                {
                    &quot;id&quot;: 2,
                    &quot;uuid&quot;: &quot;258f64bc-3a99-46ad-b68b-fa1db6b055e1&quot;,
                    &quot;restaurant_id&quot;: 1,
                    &quot;rate&quot;: 1,
                    &quot;comments&quot;: &quot;Nulla perspiciatis incidunt aut mollitia harum. Minus suscipit maiores non voluptatibus et sit. Quos quia corporis quasi quos consequatur eum vitae. Reprehenderit asperiores fuga provident consequatur molestias.&quot;,
                    &quot;name&quot;: &quot;Eve Pagac&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                },
                {
                    &quot;id&quot;: 3,
                    &quot;uuid&quot;: &quot;aa17c5d7-6228-4aa4-bab9-27947402166a&quot;,
                    &quot;restaurant_id&quot;: 1,
                    &quot;rate&quot;: 1,
                    &quot;comments&quot;: &quot;Architecto distinctio porro qui quam. Aut ea omnis vero et. Voluptatem at consequatur dolores id eius minima quibusdam voluptatibus.&quot;,
                    &quot;name&quot;: &quot;Jon Wisoky&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 2,
            &quot;uuid&quot;: &quot;e2ca59d6-1869-45a0-91c1-e79c49e143ad&quot;,
            &quot;name&quot;: &quot;Daniel-Gibson&quot;,
            &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;contact&quot;: {
                &quot;id&quot;: 2,
                &quot;uuid&quot;: &quot;9f9bbe77-51bf-4694-a52f-dcf22a6b4a1f&quot;,
                &quot;restaurant_id&quot;: 2,
                &quot;site&quot;: &quot;https://example.net&quot;,
                &quot;email&quot;: &quot;kennedy86@gmail.com&quot;,
                &quot;phone&quot;: &quot;1(888) 246-3842&quot;,
                &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
            },
            &quot;address&quot;: {
                &quot;id&quot;: 2,
                &quot;uuid&quot;: &quot;25c9136d-9db0-41a3-b731-5e3bbb2fd8cd&quot;,
                &quot;restaurant_id&quot;: 2,
                &quot;street&quot;: &quot;70684 Hackett Park&quot;,
                &quot;city&quot;: &quot;South Ovaland&quot;,
                &quot;state&quot;: &quot;North Dakota&quot;,
                &quot;location&quot;: &quot;{\&quot;lat\&quot;: 33.500189, \&quot;long\&quot;: 71.632721}&quot;,
                &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
            },
            &quot;ratings&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;uuid&quot;: &quot;0575616c-ead2-4a95-ba6b-e777c64df815&quot;,
                    &quot;restaurant_id&quot;: 2,
                    &quot;rate&quot;: 5,
                    &quot;comments&quot;: &quot;Et aliquid tenetur qui inventore architecto. Harum dolor aliquid est nihil cum omnis aut. Itaque quo harum dolorum consequuntur sapiente deserunt molestias. Ut aperiam unde nihil voluptatibus.&quot;,
                    &quot;name&quot;: &quot;Roel Kub&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                },
                {
                    &quot;id&quot;: 5,
                    &quot;uuid&quot;: &quot;3b1357d1-e734-419f-8037-1f90d08ec4ab&quot;,
                    &quot;restaurant_id&quot;: 2,
                    &quot;rate&quot;: 5,
                    &quot;comments&quot;: &quot;Dignissimos ut aut omnis laborum architecto recusandae. Quisquam reiciendis accusantium quas mollitia tempore. Et sunt velit odit in.&quot;,
                    &quot;name&quot;: &quot;Felipe West&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                },
                {
                    &quot;id&quot;: 6,
                    &quot;uuid&quot;: &quot;c8cdd8fd-841c-4b49-9cd4-7c4b8acf48dc&quot;,
                    &quot;restaurant_id&quot;: 2,
                    &quot;rate&quot;: 4,
                    &quot;comments&quot;: &quot;Distinctio neque nobis deserunt quis cupiditate. Ea eaque expedita a ipsa. Iure harum amet quia quisquam est.&quot;,
                    &quot;name&quot;: &quot;Alivia Kemmer&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 3,
            &quot;uuid&quot;: &quot;034c1f84-bd1c-47ab-ab5e-22b3c3fdcc21&quot;,
            &quot;name&quot;: &quot;Bednar, Hegmann and Schaden&quot;,
            &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;contact&quot;: {
                &quot;id&quot;: 3,
                &quot;uuid&quot;: &quot;ce85504e-87a4-4a09-8baf-c0d5faaae4c7&quot;,
                &quot;restaurant_id&quot;: 3,
                &quot;site&quot;: &quot;https://example.com&quot;,
                &quot;email&quot;: &quot;runte.elton@hotmail.com&quot;,
                &quot;phone&quot;: &quot;1(877) 833-3827&quot;,
                &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
            },
            &quot;address&quot;: {
                &quot;id&quot;: 3,
                &quot;uuid&quot;: &quot;d2029474-e1ae-4d84-b4e3-06b1ae95bbc1&quot;,
                &quot;restaurant_id&quot;: 3,
                &quot;street&quot;: &quot;251 Thiel Fords&quot;,
                &quot;city&quot;: &quot;Lake Nikitaview&quot;,
                &quot;state&quot;: &quot;Maryland&quot;,
                &quot;location&quot;: &quot;{\&quot;lat\&quot;: -65.056121, \&quot;long\&quot;: 96.996913}&quot;,
                &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
            },
            &quot;ratings&quot;: [
                {
                    &quot;id&quot;: 7,
                    &quot;uuid&quot;: &quot;599d7154-fd75-49db-a762-eea59378b460&quot;,
                    &quot;restaurant_id&quot;: 3,
                    &quot;rate&quot;: 5,
                    &quot;comments&quot;: &quot;Repellat asperiores maiores voluptatem quia eligendi dolor. Doloribus aliquam aut atque voluptas. Ratione officiis illum est recusandae dolor ipsum eum. Occaecati sit non et enim dicta quas vel qui.&quot;,
                    &quot;name&quot;: &quot;Aliya O'Conner&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                },
                {
                    &quot;id&quot;: 8,
                    &quot;uuid&quot;: &quot;3d223e79-30c7-4cd5-9d98-3e6e67c94e02&quot;,
                    &quot;restaurant_id&quot;: 3,
                    &quot;rate&quot;: 2,
                    &quot;comments&quot;: &quot;Voluptate doloremque perferendis culpa omnis omnis commodi ut. Voluptas asperiores nulla officia et. Voluptatum quo rem nihil eveniet.&quot;,
                    &quot;name&quot;: &quot;Mathias Sawayn&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                },
                {
                    &quot;id&quot;: 9,
                    &quot;uuid&quot;: &quot;ef3390aa-5559-4e37-9f8e-94eb5fdfa126&quot;,
                    &quot;restaurant_id&quot;: 3,
                    &quot;rate&quot;: 5,
                    &quot;comments&quot;: &quot;Recusandae qui et eum et corrupti. Odit tempore ut quis omnis non eos expedita. Et occaecati aliquid iure.&quot;,
                    &quot;name&quot;: &quot;Felicia Boyle&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 4,
            &quot;uuid&quot;: &quot;4264bcd2-6c92-46ab-9d47-2a838ad1a3f1&quot;,
            &quot;name&quot;: &quot;D'Amore-Gottlieb&quot;,
            &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;contact&quot;: {
                &quot;id&quot;: 4,
                &quot;uuid&quot;: &quot;a8d84cec-75c6-42d3-bf11-5e2967050f71&quot;,
                &quot;restaurant_id&quot;: 4,
                &quot;site&quot;: &quot;https://example.org&quot;,
                &quot;email&quot;: &quot;dach.haleigh@gmail.com&quot;,
                &quot;phone&quot;: &quot;(877) 427-4138&quot;,
                &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
            },
            &quot;address&quot;: {
                &quot;id&quot;: 4,
                &quot;uuid&quot;: &quot;d4e5c50d-422f-4ca7-aabf-55ac1f8ca3b3&quot;,
                &quot;restaurant_id&quot;: 4,
                &quot;street&quot;: &quot;76663 Hill Way Apt. 522&quot;,
                &quot;city&quot;: &quot;West Luis&quot;,
                &quot;state&quot;: &quot;North Carolina&quot;,
                &quot;location&quot;: &quot;{\&quot;lat\&quot;: 38.758952, \&quot;long\&quot;: 73.144476}&quot;,
                &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
            },
            &quot;ratings&quot;: [
                {
                    &quot;id&quot;: 10,
                    &quot;uuid&quot;: &quot;bbf9f7de-3c36-447f-9218-348baa622ec1&quot;,
                    &quot;restaurant_id&quot;: 4,
                    &quot;rate&quot;: 1,
                    &quot;comments&quot;: &quot;Dolor veniam et beatae quam esse officia dolore fugit. Iste perferendis tempora voluptatem accusantium labore ut voluptatem. Omnis officiis fuga nisi sequi. Quia aut illo id voluptatem labore repellat quod ut.&quot;,
                    &quot;name&quot;: &quot;Kacie Lemke&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                },
                {
                    &quot;id&quot;: 11,
                    &quot;uuid&quot;: &quot;ce126f54-8b87-4504-adcd-5c63cb24d0fc&quot;,
                    &quot;restaurant_id&quot;: 4,
                    &quot;rate&quot;: 4,
                    &quot;comments&quot;: &quot;Non qui in magnam iusto. Omnis aut eos asperiores incidunt id illum ullam.&quot;,
                    &quot;name&quot;: &quot;Freddie Harvey&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                },
                {
                    &quot;id&quot;: 12,
                    &quot;uuid&quot;: &quot;4dd057ad-ec2e-470e-9ac5-f0244a827e40&quot;,
                    &quot;restaurant_id&quot;: 4,
                    &quot;rate&quot;: 3,
                    &quot;comments&quot;: &quot;Saepe non qui delectus est. Nobis dolores dolore voluptatibus eveniet architecto. Aut aut aliquam consectetur debitis. Et cupiditate ullam quasi ab deleniti voluptate.&quot;,
                    &quot;name&quot;: &quot;Camille Halvorson&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                }
            ]
        },
        {
            &quot;id&quot;: 5,
            &quot;uuid&quot;: &quot;1477200b-21c2-4f08-8a50-2ea446b233a3&quot;,
            &quot;name&quot;: &quot;Halvorson and Sons&quot;,
            &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;contact&quot;: {
                &quot;id&quot;: 5,
                &quot;uuid&quot;: &quot;4744db08-65d9-4372-9c98-958cab282161&quot;,
                &quot;restaurant_id&quot;: 5,
                &quot;site&quot;: &quot;https://example.com&quot;,
                &quot;email&quot;: &quot;ecremin@yahoo.com&quot;,
                &quot;phone&quot;: &quot;(877) 541-9327&quot;,
                &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
            },
            &quot;address&quot;: {
                &quot;id&quot;: 5,
                &quot;uuid&quot;: &quot;0808f47b-ea68-4820-a051-95020c5925fa&quot;,
                &quot;restaurant_id&quot;: 5,
                &quot;street&quot;: &quot;87843 Marcel Mission&quot;,
                &quot;city&quot;: &quot;Lake Chayaville&quot;,
                &quot;state&quot;: &quot;Rhode Island&quot;,
                &quot;location&quot;: &quot;{\&quot;lat\&quot;: -55.919123, \&quot;long\&quot;: 56.513944}&quot;,
                &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
            },
            &quot;ratings&quot;: [
                {
                    &quot;id&quot;: 13,
                    &quot;uuid&quot;: &quot;f00ab28a-1113-477d-b087-c2fcee6bbc9b&quot;,
                    &quot;restaurant_id&quot;: 5,
                    &quot;rate&quot;: 4,
                    &quot;comments&quot;: &quot;Ut ut sint sunt magnam consequatur iusto dolorem. Nihil corporis fugiat qui recusandae saepe consequatur rerum ut. Et deserunt beatae error neque mollitia ea.&quot;,
                    &quot;name&quot;: &quot;Emelie Volkman&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                },
                {
                    &quot;id&quot;: 14,
                    &quot;uuid&quot;: &quot;cb7a8df0-13dc-44fd-9847-9dd6506778e1&quot;,
                    &quot;restaurant_id&quot;: 5,
                    &quot;rate&quot;: 5,
                    &quot;comments&quot;: &quot;Vel mollitia voluptatibus voluptatibus deleniti. Perspiciatis et quibusdam velit. Quis quis quibusdam saepe alias itaque minima voluptas. Et praesentium quos aut ullam voluptas ea assumenda qui.&quot;,
                    &quot;name&quot;: &quot;Megane Cormier&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                },
                {
                    &quot;id&quot;: 15,
                    &quot;uuid&quot;: &quot;2539eabf-567a-4a0f-bc2d-d43709e8c838&quot;,
                    &quot;restaurant_id&quot;: 5,
                    &quot;rate&quot;: 5,
                    &quot;comments&quot;: &quot;Cumque ipsa qui enim dolorem veritatis sunt tenetur. Soluta velit ea distinctio et officia cum. Tenetur quod labore perspiciatis vitae qui minus magnam fuga. Est non provident vel nobis saepe et placeat voluptatem.&quot;,
                    &quot;name&quot;: &quot;Tina Adams&quot;,
                    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
                }
            ]
        }
    ],
    &quot;first_page_url&quot;: &quot;http://localhost:8000/api/v1/restaurants?page=1&quot;,
    &quot;from&quot;: 1,
    &quot;next_page_url&quot;: &quot;http://localhost:8000/api/v1/restaurants?page=2&quot;,
    &quot;path&quot;: &quot;http://localhost:8000/api/v1/restaurants&quot;,
    &quot;per_page&quot;: 5,
    &quot;prev_page_url&quot;: null,
    &quot;to&quot;: 5
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-restaurants" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-restaurants"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-restaurants"></code></pre>
</span>
<span id="execution-error-GETapi-v1-restaurants" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-restaurants"></code></pre>
</span>
<form id="form-GETapi-v1-restaurants" data-method="GET"
      data-path="api/v1/restaurants"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-restaurants', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/restaurants</code></b>
        </p>
                    </form>

            <h2 id="restaurants-GETapi-v1-restaurants--id-">Get Restaurant</h2>

<p>
</p>

<p>Retrieve a restaurant by id</p>

<span id="example-requests-GETapi-v1-restaurants--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/v1/restaurants/16?id=15" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/v1/restaurants/16"
);

const params = {
    "id": "15",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-restaurants--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 51
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;id&quot;: 1,
    &quot;uuid&quot;: &quot;f3742fd1-6ce8-4dd7-9757-b96e4b7cf8da&quot;,
    &quot;name&quot;: &quot;Kshlerin Inc&quot;,
    &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
    &quot;contact&quot;: {
        &quot;id&quot;: 1,
        &quot;uuid&quot;: &quot;3bf5c1fc-b914-42cf-92b4-e4d2fb7168b4&quot;,
        &quot;restaurant_id&quot;: 1,
        &quot;site&quot;: &quot;https://example.com&quot;,
        &quot;email&quot;: &quot;osborne56@gmail.com&quot;,
        &quot;phone&quot;: &quot;(866) 629-7915&quot;,
        &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
    },
    &quot;address&quot;: {
        &quot;id&quot;: 1,
        &quot;uuid&quot;: &quot;c8be4360-d9f9-4ffe-8614-8dbc4d31281e&quot;,
        &quot;restaurant_id&quot;: 1,
        &quot;street&quot;: &quot;64426 Lorena Inlet Suite 110&quot;,
        &quot;city&quot;: &quot;Gusikowskiburgh&quot;,
        &quot;state&quot;: &quot;Missouri&quot;,
        &quot;location&quot;: &quot;{\&quot;lat\&quot;: 13.124585, \&quot;long\&quot;: -81.526242}&quot;,
        &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
    },
    &quot;ratings&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;uuid&quot;: &quot;f1708c22-d83d-449d-bb49-b7550bea3c1c&quot;,
            &quot;restaurant_id&quot;: 1,
            &quot;rate&quot;: 2,
            &quot;comments&quot;: &quot;Fuga vel quia iste nisi quod molestias. Soluta id perferendis at consequatur sed. Ab aut non omnis voluptatibus. Eum et et quia rerum.&quot;,
            &quot;name&quot;: &quot;Rocky Eichmann&quot;,
            &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;uuid&quot;: &quot;258f64bc-3a99-46ad-b68b-fa1db6b055e1&quot;,
            &quot;restaurant_id&quot;: 1,
            &quot;rate&quot;: 1,
            &quot;comments&quot;: &quot;Nulla perspiciatis incidunt aut mollitia harum. Minus suscipit maiores non voluptatibus et sit. Quos quia corporis quasi quos consequatur eum vitae. Reprehenderit asperiores fuga provident consequatur molestias.&quot;,
            &quot;name&quot;: &quot;Eve Pagac&quot;,
            &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;uuid&quot;: &quot;aa17c5d7-6228-4aa4-bab9-27947402166a&quot;,
            &quot;restaurant_id&quot;: 1,
            &quot;rate&quot;: 1,
            &quot;comments&quot;: &quot;Architecto distinctio porro qui quam. Aut ea omnis vero et. Voluptatem at consequatur dolores id eius minima quibusdam voluptatibus.&quot;,
            &quot;name&quot;: &quot;Jon Wisoky&quot;,
            &quot;created_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-02-21T08:41:36.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-restaurants--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-restaurants--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-restaurants--id-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-restaurants--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-restaurants--id-"></code></pre>
</span>
<form id="form-GETapi-v1-restaurants--id-" data-method="GET"
      data-path="api/v1/restaurants/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-restaurants--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/restaurants/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-v1-restaurants--id-"
               value="16"
               data-component="url" hidden>
    <br>
<p>The ID of the restaurant.</p>
            </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-v1-restaurants--id-"
               value="15"
               data-component="query" hidden>
    <br>
<p>reqyured The id of the restaurant to get</p>
            </p>
                </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
