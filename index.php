<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Fabox - The most flexible lightbox for web profesionals</title>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="landing/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="landing/animate.css" />
        <link rel="stylesheet" type="text/css" href="css/fabox.css" />
        <link rel="stylesheet" type="text/css" href="landing/landing.css" />
        <script type="text/javascript" src="landing/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="landing/prettify.js"></script>
        <script type="text/javascript" src="js/fabox.js"></script>
        <script type="text/javascript" src="landing/landing.js"></script>
    </head>
    <body>
        <div id="fabox1"></div>
        <div id="fabox2"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Fabox - The most flexible lightbox on the world</h1>
                    <ul>
                        <li>Responsive</li>
                        <li>Minimalist</li>
                        <li>Powerful</li>
                        <li>Ultra flexible</li>
                        <li>Extendable</li>
                        <li>Support multiple-instance</li>
                        <li>And very easy and quickly to use !</li>
                    </ul>

                    <div class="row">
                        <a href="#demo" class="btn btn-info">Demo</a>
                        <a href="#doc" class="btn btn-info">Documentation</a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Step 1 - Install Fabox.js and its dependencies</h2>
                    <p>Fabox.js require jQuery and FontAwesome</p>
<pre class="prettyprint"><code class="language-html"><?php echo htmlentities('<head>'); ?>

    <?php echo htmlentities('<!-- First, load font-awesome ... -->'); ?>

    <?php echo htmlentities('<link rel="stylesheet" type="text/css" href="font-awesome.css" />'); ?>

    <?php echo htmlentities('<!-- ... load fabox style ... -->'); ?>

    <?php echo htmlentities('<link rel="stylesheet" type="text/css" href="fabox.css" />'); ?>

    <?php echo htmlentities('<!-- ... load your fabox style (override) ... -->'); ?>

    <?php echo htmlentities('<link rel="stylesheet" type="text/css" href="extend.css" />'); ?>

    <?php echo htmlentities('<!-- ... load jQuery ... -->'); ?>

    <?php echo htmlentities('<script type="text/javascript" src="jquery.js"></script>'); ?>

    <?php echo htmlentities('<!-- ... and load fabox.js ! -->'); ?>

    <?php echo htmlentities('<script type="text/javascript" src="fabox.js"></script>'); ?>
                    
<?php echo htmlentities('</head>'); ?>

</code></pre>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Step 2 - Declare your lightbox(es)</h2>
<pre class="prettyprint"><code class="language-html">...
<?php echo htmlentities('<body>'); ?>
                    
    <?php echo htmlentities('<div id="fabox1"></div>'); ?>

    <?php echo htmlentities('<div id="fabox2"></div>'); ?>

    ...
</code></pre>
                    <div class="alert alert-info">Note : it's suitable that your lightboxes are placed just after the body tag</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Step 3 - Initialize your lightbox(es) in your JS part</h2>
<pre class="prettyprint"><code class="language-js"><?php echo htmlentities('<script type="text/javascript">'); ?>
    
    $(document).ready(function() {
        $('#fabox1').fabox();
        $('#fabox2').fabox();
        ...
    });
<?php echo htmlentities('</script>'); ?>
</code></pre>
                    <div class="alert alert-success">Congratulations, your lightbox is ready to use !</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2 id="demo">Demo</h2>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 example-item">
                            <div class="description">
                                <h3>#1 Picture</h3>
                                <p>Large picture (2500 * 1600) - landscape - resized</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success" onclick="example(1)">Demo</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-info" onclick="quickUse(1)">Use</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 example-item">
                            <div class="description">
                                <h3>#2 Picture</h3>
                                <p>Large picture (1600 * 2500) - portrait - resized</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success" onclick="example(2)">Demo</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-info" onclick="quickUse(2)">Use</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 example-item">
                            <div class="description">
                                <h3>#3 Picture</h3>
                                <p>Small picture (400 * 200) - portrait - unchanged</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success" onclick="example(3)">Demo</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-info" onclick="quickUse(3)">Use</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 example-item">
                            <div class="description">
                                <h3>#4 Youtube iFrame</h3>
                                <p>Youtube iframe with attribute "width" and "height" (for proportions)</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success" onclick="example(4)">Demo</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-info" onclick="quickUse(4)">Use</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 example-item">
                            <div class="description">
                                <h3>#5 Vimeo iFrame</h3>
                                <p>Vimeo iFrame with attribute "width" and "height" (for proportions)</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success" onclick="example(8)">Demo</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-info" onclick="quickUse(8)">Use</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 example-item">
                            <div class="description">
                                <h3>#6 Simple HTML</h3>
                                <p>Width: 600px</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success" onclick="example(5)">Demo</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-info" onclick="quickUse(5)">Use</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 example-item">
                            <div class="description">
                                <h3>#7 iFrame</h3>
                                <p>Without scrollbar, content of iFrame must be responsive</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success" onclick="example(6)">Demo</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-info" onclick="quickUse(6)">Use</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 example-item">
                            <div class="description">
                                <h3>#8 iFrame</h3>
                                <p>With scrollbars</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success" onclick="example(7)">Demo</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-info" onclick="quickUse(7)">Use</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 example-item">
                            <div class="description">
                                <h3>#9 Ajax URL</h3>
                                <p>Content loaded in AJAX (without doctype, head, body...)</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success" onclick="example(9)">Demo</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-info" onclick="quickUse(9)">Use</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 example-item">
                            <div class="description">
                                <h3>#10 Ajax fail</h3>
                                <p>Content loaded with non-existing URL in AJAX</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success" onclick="example(10)">Demo</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-info" onclick="quickUse(10)">Use</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 example-item">
                            <div class="description">
                                <h3>#11 Alert</h3>
                                <p>Replace "window.alert" of browser</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success" onclick="example(11)">Demo</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-info" onclick="quickUse(11)">Use</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 example-item">
                            <div class="description">
                                <h3>#12 Confirm</h3>
                                <p>Replace "window.confirm" of browser</p>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-success" onclick="example(12)">Demo</button>
                                </div>
                                <div class="col-xs-6">
                                    <button type="button" class="btn btn-info" onclick="quickUse(12)">Use</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2 id="doc">Documentation</h2>
                        <ul>
                           <li><a href="#p1">Instanciate</a></li>
                           <li><a href="#p2">Write</a></li>
                           <li><a href="#p3">Open</a></li>
                           <li><a href="#p4">Close</a></li>
                           <li><a href="#p5">Ajax</a></li>
                           <li><a href="#p6">Alert</a></li>
                           <li><a href="#p7">Confirm</a></li>
                        </ul>
                            <h3 id="p1">Instanciate</h3>
<pre class="prettyprint"><code class="language-js">$('#fabox1').fabox();

</code></pre>
                            <h3 id="p2">Write</h3>
<pre class="prettyprint"><code class="language-js">$('#fabox1').fabox('write', params);

</code></pre>
                        <p><strong><i>params : </i></strong></p>
                        <table class="table-parameters" cellpadding="0" cellspacing="0">
                            <colgroup>
                                <col />
                                <col />
                                <col />
                                <col />
                                <col />
                                <col width="400" />
                            </colgroup>
                            <tr class="first">
                                <td>Parameter key</td>
                                <td>Type</td>
                                <td>Required</td>
                                <td>Values</td>
                                <td>Default</td>
                                <td>Description</td>
                            </tr>
                            <tr>
                                <td><strong><i>content</i></strong></td>
                                <td>String</td>
                                <td>Yes</td>
                                <td></td>
                                <td></td>
                                <td>Content of box</td>
                            </tr>
                            <tr>
                                <td><strong><i>open</i></strong></td>
                                <td>Boolean</td>
                                <td>No</td>
                                <td>true / false</td>
                                <td>false</td>
                                <td>If true, opens the box after the content is written / loaded</td>
                            </tr>
                            <tr>
                                <td><strong><i>full</i></strong></td>
                                <td>Boolean</td>
                                <td>No</td>
                                <td>true / false</td>
                                <td>false</td>
                                <td>If true, the box will be resized depending on the content (<strong>video, responsive iframe, picture...</strong>)</td>
                            </tr>
                            <tr>
                                <td><strong><i>width</i></strong></td>
                                <td>Integer</td>
                                <td>No</td>
                                <td></td>
                                <td></td>
                                <td>If value does not exceed 80% of screen, the box will have a width of <strong><i>width</i></strong> px</td>
                            </tr>
                            <tr>
                                <td><strong><i>height</i></strong></td>
                                <td>Integer</td>
                                <td>No</td>
                                <td></td>
                                <td></td>
                                <td>If value does not exceed 80% of screen, the box will have a height of <strong><i>height</i></strong> px</td>
                            </tr>
                            <tr>
                                <td><strong><i>control</i></strong></td>
                                <td>Boolean</td>
                                <td>No</td>
                                <td></td>
                                <td>true</td>
                                <td>If false, button to close the box is disabled</td>
                            </tr>
                            <tr>
                                <td><strong><i>mode_closebox</i></strong></td>
                                <td>String</td>
                                <td>No</td>
                                <td>'full' / 'center'</td>
                                <td>'full'</td>
                                <td>If value is 'full', the button is located at the top right of the screen.<br>If value is 'center', the button is located at the top right of the content box.</td>
                            </tr>
                        </table>

                        <div class="alert alert-info">Examples : <a href="javascript:quickUse(1);">#1</a>, <a href="javascript:quickUse(2);">#2</a>, <a href="javascript:quickUse(3);">#3</a>, <a href="javascript:quickUse(4);">#4</a>, <a href="javascript:quickUse(5);">#5</a>, <a href="javascript:quickUse(6);">#6</a>, <a href="javascript:quickUse(7);">#7</a>, <a href="javascript:quickUse(8);">#8</a>...</div>

                        <h3 id="p3">Open</h3>
<pre class="prettyprint"><code class="language-js">$('#fabox1').fabox('open', params);

</code></pre>
                        <p><strong><i>params : </i></strong></p>
                        <table class="table-parameters" cellpadding="0" cellspacing="0">
                            <colgroup>
                                <col />
                                <col />
                                <col />
                                <col />
                                <col />
                                <col width="400" />
                            </colgroup>
                            <tr class="first">
                                <td>Parameter key</td>
                                <td>Type</td>
                                <td>Required</td>
                                <td>Values</td>
                                <td>Default</td>
                                <td>Description</td>
                            </tr>
                            <tr>
                                <td><strong><i>speed</i></strong></td>
                                <td>Integer</td>
                                <td>No</td>
                                <td></td>
                                <td>200</td>
                                <td>Opening speed of the box</td>
                            </tr>
                        </table>
                        <h3 id="p4">Close</h3>
<pre class="prettyprint"><code class="language-js">$('#fabox1').fabox('close');

</code></pre>
                        <h3 id="p5">Ajax</h3>
<pre class="prettyprint"><code class="language-js">$('#fabox1').fabox('ajax', params);

</code></pre>
                        <p><strong><i>params : </i></strong></p>
                        <table class="table-parameters" cellpadding="0" cellspacing="0">
                            <colgroup>
                                <col />
                                <col />
                                <col />
                                <col />
                                <col />
                                <col width="400" />
                            </colgroup>
                            <tr class="first">
                                <td>Parameter key</td>
                                <td>Type</td>
                                <td>Required</td>
                                <td>Values</td>
                                <td>Default</td>
                                <td>Description</td>
                            </tr>
                            <tr>
                                <td><strong><i>url</i></strong></td>
                                <td>String</td>
                                <td>Yes</td>
                                <td></td>
                                <td></td>
                                <td>A string containing the URL to which the request is sent</td>
                            </tr>
                            <tr>
                                <td><strong><i>type</i></strong></td>
                                <td>String</td>
                                <td>No</td>
                                <td>'GET' / 'POST'</td>
                                <td>'GET'</td>
                                <td>The type of request to make</td>
                            </tr>
                            <tr>
                                <td><strong><i>data</i></strong></td>
                                <td>JSON Object</td>
                                <td>No</td>
                                <td></td>
                                <td>{}</td>
                                <td>Data to send in your ajax request</td>
                            </tr>
                            <tr>
                                <td><strong><i>full</i></strong></td>
                                <td>Boolean</td>
                                <td>No</td>
                                <td>true / false</td>
                                <td>false</td>
                                <td>If true, the box will be resized depending on the content (<strong>video, responsive iframe, picture...</strong>)</td>
                            </tr>
                            <tr>
                                <td><strong><i>width</i></strong></td>
                                <td>Integer</td>
                                <td>No</td>
                                <td></td>
                                <td></td>
                                <td>If value does not exceed 80% of screen, the box will have a width of <strong><i>width</i></strong> px</td>
                            </tr>
                            <tr>
                                <td><strong><i>height</i></strong></td>
                                <td>Integer</td>
                                <td>No</td>
                                <td></td>
                                <td></td>
                                <td>If value does not exceed 80% of screen, the box will have a height of <strong><i>height</i></strong> px</td>
                            </tr>
                            <tr>
                                <td><strong><i>control</i></strong></td>
                                <td>Boolean</td>
                                <td>No</td>
                                <td></td>
                                <td>true</td>
                                <td>If false, button to close the box is disabled</td>
                            </tr>
                            <tr>
                                <td><strong><i>mode_closebox</i></strong></td>
                                <td>String</td>
                                <td>No</td>
                                <td>'full' / 'center'</td>
                                <td>'full'</td>
                                <td>If value is 'full', the button is located at the top right of the screen.<br>If value is 'center', the button is located at the top right of the content box.</td>
                            </tr>
                        </table>
                        <div class="alert alert-info">Examples : <a href="javascript:quickUse(9);">#9</a>, <a href="javascript:quickUse(10);">#10</a></div>
                        <h3 id="p6">Alert</h3>
<pre class="prettyprint"><code class="language-js">$('#fabox1').fabox('alert', params);

</code></pre>
                        <p><strong><i>params : </i></strong></p>
                        <table class="table-parameters" cellpadding="0" cellspacing="0">
                            <colgroup>
                                <col />
                                <col />
                                <col />
                                <col />
                                <col />
                                <col width="400" />
                            </colgroup>
                            <tr class="first">
                                <td>Parameter key</td>
                                <td>Type</td>
                                <td>Required</td>
                                <td>Values</td>
                                <td>Default</td>
                                <td>Description</td>
                            </tr>
                            <tr>
                                <td><strong><i>title</i></strong></td>
                                <td>String</td>
                                <td>No</td>
                                <td></td>
                                <td></td>
                                <td>Title of alert box</td>
                            </tr>
                            <tr>
                                <td><strong><i>msg</i></strong></td>
                                <td>String</td>
                                <td>No</td>
                                <td></td>
                                <td></td>
                                <td>Message of alert box</td>
                            </tr>
                            <tr>
                                <td><strong><i>width</i></strong></td>
                                <td>Integer</td>
                                <td>No</td>
                                <td></td>
                                <td></td>
                                <td>If value does not exceed 80% of screen, the box will have a width of <strong><i>width</i></strong> px</td>
                            </tr>
                            <tr>
                                <td><strong><i>mode_closebox</i></strong></td>
                                <td>String</td>
                                <td>No</td>
                                <td>'full' / 'center'</td>
                                <td>'full'</td>
                                <td>If value is 'full', the button is located at the top right of the screen.<br>If value is 'center', the button is located at the top right of the content box.</td>
                            </tr>
                        </table>
                        <div class="alert alert-info">Example : <a href="javascript:quickUse(11);">#11</a></div>
                        <h3 id="p7">Confirm</h3>
<pre class="prettyprint"><code class="language-js">$('#fabox1').fabox('confirm', params);

</code></pre>
                        <p><strong><i>params : </i></strong></p>
                        <table class="table-parameters" cellpadding="0" cellspacing="0">
                            <colgroup>
                                <col />
                                <col />
                                <col />
                                <col />
                                <col />
                                <col width="400" />
                            </colgroup>
                            <tr class="first">
                                <td>Parameter key</td>
                                <td>Type</td>
                                <td>Required</td>
                                <td>Values</td>
                                <td>Default</td>
                                <td>Description</td>
                            </tr>
                            <tr>
                                <td><strong><i>callback_left</i></strong></td>
                                <td>String</td>
                                <td>Yes</td>
                                <td></td>
                                <td></td>
                                <td>Callback function when user click on the left button</td>
                            </tr>
                            <tr>
                                <td><strong><i>callback_right</i></strong></td>
                                <td>String</td>
                                <td>Yes</td>
                                <td></td>
                                <td></td>
                                <td>Callback function when user click on the right button</td>
                            </tr>
                            <tr>
                                <td><strong><i>title</i></strong></td>
                                <td>String</td>
                                <td>No</td>
                                <td></td>
                                <td></td>
                                <td>Title of alert box</td>
                            </tr>
                            <tr>
                                <td><strong><i>msg</i></strong></td>
                                <td>String</td>
                                <td>No</td>
                                <td></td>
                                <td></td>
                                <td>Message of alert box</td>
                            </tr>
                            <tr>
                                <td><strong><i>left_btn</i></strong></td>
                                <td>String</td>
                                <td>No</td>
                                <td></td>
                                <td>'Cancel'</td>
                                <td>Content of left button</td>
                            </tr>
                            <tr>
                                <td><strong><i>right_btn</i></strong></td>
                                <td>String</td>
                                <td>No</td>
                                <td></td>
                                <td>'Confirm'</td>
                                <td>Content of right button</td>
                            </tr>
                            <tr>
                                <td><strong><i>width</i></strong></td>
                                <td>Integer</td>
                                <td>No</td>
                                <td></td>
                                <td></td>
                                <td>If value does not exceed 80% of screen, the box will have a width of <strong><i>width</i></strong> px</td>
                            </tr>
                            <tr>
                                <td><strong><i>mode_closebox</i></strong></td>
                                <td>String</td>
                                <td>No</td>
                                <td>'full' / 'center'</td>
                                <td>'full'</td>
                                <td>If value is 'full', the button is located at the top right of the screen.<br>If value is 'center', the button is located at the top right of the content box.</td>
                            </tr>
                        </table>
                        <div class="alert alert-info">Example : <a href="javascript:quickUse(12);">#12</a></div>
                </div>
            </div>
        </div>
    </body>
</html>