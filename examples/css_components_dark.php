<!DOCTYPE html>
<html lang="en" class="js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Components | Photon - The Superfast, Supersimple UI Kit</title>
        <meta name="description" content="Photon - The superfast, supersimple UI Kit" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="eMAG CORE UI Team">

        <!-- The favicon -->
        <?php include_once "modules/_mod_favicon.php"?>

        <!-- PHOTON main styles -->
        <link rel="stylesheet" href="../dist/css/main_style_dark.min.css">

        <!--[if lt IE 9]>
            <script src="../dist/js/lib/html5shiv.min.js"></script>
            <script src="../dist/js/lib/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 9]><body class="lt-ie9"> <![endif]-->
        <!--[if lt IE 9]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
        <!-- HEADER:Start -->
        <?php include_once "modules/_mod_header.php"?>
        <!-- HEADER:End -->
        <!-- PAGE:Start -->
        <div class="main-container" id="main-container">
            <div class="main-container-inner">
                <!-- SIDEBAR:Start -->
                <?php include_once "modules/_mod_sidebar.php"?>
                <!-- SIDEBAR:End -->
                <!-- CONTENT:Start -->
                <div class="main-content">
                    <div class="page-content">
                        <div class="jumbotron">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="container-fluid pad-sep-60">
                                        <h1>PHOTON - Components</h1>
                                        <p>The lightning-fast, modular, mobile-friendly admin template.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="htmlcode" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel">
                                        <div class="show-panel-body">
                                            <h2><strong>HTML & CSS</strong></h2>
                                            <p><strong>These elements rely on the main stylesheet in order to be displayed.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="typeStyles" class="pad-top-40">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Type variations and print</strong></h4>
                                            <p><strong>Headings and Paragraphs:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <h1>h1,.h1 - Heading 1</h1>
                                                        <p class="lead">This is a sample of lead paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin neque odio, quis fringilla tortor eleifend in. Proin suscipit nunc quam, sed consequat est pulvinar eget. Donec vel hendrerit tortor, et rhoncus lectus. Donec non tellus vel diam aliquam egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                        <h2>h2,.h2 - Heading 2</h2>
                                                        <p>This is a sample of paragraph text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin neque odio, quis fringilla tortor eleifend in. Proin suscipit nunc quam, sed consequat est pulvinar eget. Donec vel hendrerit tortor, et rhoncus lectus. Donec non tellus vel diam aliquam egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                                        <h3>h3,.h3 - Heading 3</h3>
                                                        <h4>h4,.h4 - Heading 4</h4>
                                                        <h5>h5,.h5 - Heading 5</h5>
                                                        <h6>h6,.h6 - Heading 6</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Utilities:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <p><mark>Highlighted text</mark></p>
                                                        <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                                        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                                        <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                                        <p><u>This line of text will render as underlined</u></p>
                                                        <p><small>This line of text is meant to be treated as fine print.</small></p>
                                                        <p><strong>This line of text is rendered as bold text</strong></p>
                                                        <p><em>This line of text is rendered as italicized text</em></p>
                                                        <p>An abreviation of the word "attribute" is <abbr title="attribute">attr</abbr></p>
                                                    </div>
                                                </div>
                                                <div class="pad-top-40"></div>
                                                <div class="alert alert-info" role="alert"><p><i class="fa fa-info-circle"></i> For showing and hiding content you can use either <code>.show</code> or <code>.hide</code> classes. The <code>.invisible</code> class can be used to toggle only the visibility of an element, meaning its display is not modified and the element can still affect the content of the document. You can hide an element to <b>all devices except screen readers</b> by using the <code>.sr-only</code> class. To show the element when it's focused upon (via keyboard "tab") you can combine <code>.sr-only</code> with <code>.sr-only-focusable</code>.</p></div>
                                                <div class="alert alert-info" role="alert"><i class="fa fa-info-circle"></i> You can <strong>enlarge the font-sizing</strong> of any element by adding one of the classes from the following range:<code>.fonts-up-120</code> to <code>.fonts-up-200</code>. Please take into consideration that these classes have a step of <code><strong>20</strong></code>.</div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Alignment:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <p class="text-left">This text is aligned to the left.</p>
                                                        <p class="text-center">This text is centered.</p>
                                                        <p class="text-right">This text is aligned to the right.</p>
                                                        <p class="text-justify">This text is supposed to be justified. Check it out on a smaller resolution.</p>
                                                        <p class="text-nowrap">No wrap text. This means that it won't break on another row when the text exceeds the container.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Address:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <address>
                                                            <strong>Dante International S.A.</strong><br>
                                                            Swan Office Park, Windsor Building <br>
                                                            Sos. Bucureşti Nord nr. 15-23, Voluntari, Ilfov<br>
                                                            <abbr title="Phone">P:</abbr> +40 21 200 52 00/25
                                                        </address>
                                                        <address>
                                                            <strong>Eric Norton</strong><br>
                                                            <a href="mailto:#">eric.norton@emag.ro</a>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Contextual classes:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <p><strong></strong></p>
                                                        <p class="bg-primary">This text has the brand-primary contextual background-color</p>
                                                        <p class="bg-success">This text has the brand-success contextual background-color</p>
                                                        <p class="bg-info">This text has the brand-info contextual background-color</p>
                                                        <p class="bg-warning">This text has the brand-warning contextual background-color</p>
                                                        <p class="bg-danger">This text has the brand-danger contextual background-color</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Text case and capitalization:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <p class="text-lowercase">Lowercased text.</p>
                                                        <p class="text-uppercase">Uppercased text.</p>
                                                        <p class="text-capitalize">Capitalized text.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Block quotes:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <p><strong>Blockquote with subtext:</strong></p>
                                                        <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><footer>Someone famous in <cite title="Source Title">Source Title</cite></footer></blockquote>
                                                        <br>
                                                        <p><strong>Alternate alignment blockquote:</strong></p>
                                                        <blockquote class="blockquote-reverse"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p><footer>Someone famous in <cite title="Source Title">Source Title</cite></footer></blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Print</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th>Classes</th>
                                                                    <th>Browser</th>
                                                                    <th>Print</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <code>.visible-print-block</code><br>
                                                                        <code>.visible-print-inline</code><br>
                                                                        <code>.visible-print-inline-block</code>
                                                                    </th>
                                                                    <td><p class="text-danger"><strong>Hidden</strong></p></td>
                                                                    <td><p class="text-success"><strong>Visible</strong></p></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row"><code>.hidden-print</code></th>
                                                                    <td><p class="text-success"><strong>Visible</strong></p></td>
                                                                    <td><p class="text-danger"><strong>Hidden</strong></p></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Code:</strong></p>
                                            <p>You can wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <p>For example, <code>&lt;section&gt;</code> should be wrapped as inline.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>User input:</strong></p>
                                            <p>You can use the <code>&lt;kbd&gt;</code> to indicate input that is typically entered via keyboard.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <p>To switch directories, type <kbd>cd</kbd> followed by the name of the directory.</p>
                                                        <p>To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Preformatted block:</strong></p>
                                            <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <p><pre>&lt;p&gt;This is a sample text...&lt;/p&gt;</pre></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-info" role="alert"><i class="fa fa-info-circle fonts-up-140"></i>
                                                 You may optionally add the <mark>.pre-scrollable</mark> class, which will set a max-height of 350px and provide a y-axis scrollbar.
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Variables:</strong></p>
                                            <p>For indicating variables use the <code>&lt;var&gt;</code> tag.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <p><var>y</var> = <var>m</var><var>x</var> + <var>b</var></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Sample output:</strong></p>
                                            <p>For indicating blocks sample output from a program use the  <code>&lt;samp&gt;</code> tag.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <p><samp>This text is meant to be treated as sample output from a computer program.</samp></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Descriptions:</strong></p>
                                            <p>You can display a list of terms with their associated descriptions.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <dl>
                                                            <dt>Description lists</dt>
                                                            <dd>A description list is perfect for defining terms.</dd>
                                                            <dt>Euismod</dt>
                                                            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                                            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                                            <dt>Malesuada porta</dt>
                                                            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Horizontal descriptions:</strong></p>
                                            <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s, but when the navbar expands, so do these.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <dl class="dl-horizontal">
                                                            <dt>Description lists</dt>
                                                            <dd>A description list is perfect for defining terms.</dd>
                                                            <dt>Euismod</dt>
                                                            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                                            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                                            <dt>Malesuada porta</dt>
                                                            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                                            <dt>Felis euismod semper eget lacinia</dt>
                                                            <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Unordered list:</strong></p>
                                            <p>A list of items in which the order does <strong>not</strong> explicitly matter.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <ul>
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Consectetur adipiscing elit</li>
                                                            <li>Integer molestie lorem at massa</li>
                                                            <li>Facilisis in pretium nisl aliquet</li>
                                                            <li>Nulla volutpat aliquam velit
                                                                <ul>
                                                                    <li>Phasellus iaculis neque</li>
                                                                    <li>Purus sodales ultricies</li>
                                                                    <li>Vestibulum laoreet porttitor sem</li>
                                                                    <li>Ac tristique libero volutpat at</li>
                                                                </ul>
                                                            </li>
                                                            <li>Faucibus porta lacus fringilla vel</li>
                                                            <li>Aenean sit amet erat nunc</li>
                                                            <li>Eget porttitor lorem</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Ordered list:</strong></p>
                                            <p>A list of items in which the order <strong>does</strong> explicitly matter.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <ol>
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Consectetur adipiscing elit</li>
                                                            <li>Integer molestie lorem at massa</li>
                                                            <li>Facilisis in pretium nisl aliquet</li>
                                                            <li>Nulla volutpat aliquam velit</li>
                                                            <li>Faucibus porta lacus fringilla vel</li>
                                                            <li>Aenean sit amet erat nunc</li>
                                                            <li>Eget porttitor lorem</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Unstyled list:</strong></p>
                                            <p>You can remove the default list-style and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <ul class="list-unstyled">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>Consectetur adipiscing elit</li>
                                                            <li>Integer molestie lorem at massa</li>
                                                            <li>Facilisis in pretium nisl aliquet</li>
                                                            <li>Nulla volutpat aliquam velit
                                                                <ul>
                                                                    <li>Phasellus iaculis neque</li>
                                                                    <li>Purus sodales ultricies</li>
                                                                    <li>Vestibulum laoreet porttitor sem</li>
                                                                    <li>Ac tristique libero volutpat at</li>
                                                                </ul>
                                                            </li>
                                                            <li>Faucibus porta lacus fringilla vel</li>
                                                            <li>Aenean sit amet erat nunc</li>
                                                            <li>Eget porttitor lorem</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Inline list:</strong></p>
                                            <p>Place all list items on a single line with <code>display: inline-block;</code> and some light padding.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <ul class="list-inline">
                                                            <li>First element</li>
                                                            <li>Second element</li>
                                                            <li>Third element</li>
                                                            <li>Fourth element</li>
                                                            <li>Fifth element</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssTables" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Tables</strong></h4>
                                            <p><strong>Basic example:</strong></p>
                                            <p>As we've mentioned before, PHOTON is based on the Twitter Bootstrap v3 architecture and classes. You can find out more about Bootstrap Tables by checking out <a href="http://getbootstrap.com/css/#tables" target="_blank"><u>getbootstrap.com/css/#tables</u></a>.</p>
                                            <p>For basic styling—light padding and only horizontal dividers—add the base class <mark>.table</mark> to any <code>&lt;table&gt;</code>.</p>
                                            <div class="pad-sep-20">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Brand</th>
                                                        <th>Product</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Mark</td>
                                                        <td>Jacobs</td>
                                                        <td>Mark Jacobs</td>
                                                        <td>Shoes</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Tom</td>
                                                        <td>Ford</td>
                                                        <td>Tom Ford</td>
                                                        <td>Clothing, Suits</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Jimmy</td>
                                                        <td>Choo</td>
                                                        <td>Jimmy Choo</td>
                                                        <td>Shoes</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                            <pre>This is a test</pre>
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Striped rows</strong></p>
                                            <p>Use <mark>.table-striped</mark> to add zebra-striping to any table row within the  <code>&lt;table&gt;</code>.</p>
                                            <div class="pad-sep-20">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Brand</th>
                                                        <th>Product</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Mark</td>
                                                        <td>Jacobs</td>
                                                        <td>Mark Jacobs</td>
                                                        <td>Shoes</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Tom</td>
                                                        <td>Ford</td>
                                                        <td>Tom Ford</td>
                                                        <td>Clothing, Suits</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Jimmy</td>
                                                        <td>Choo</td>
                                                        <td>Jimmy Choo</td>
                                                        <td>Shoes</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                            <pre>This is a test</pre>
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Bordered table</strong></p>
                                            <p>Add <mark>.table-bordered</mark> for borders on all sides of the table and cells.</p>
                                            <div class="pad-sep-20">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Brand</th>
                                                        <th>Product</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Mark</td>
                                                        <td>Jacobs</td>
                                                        <td>Mark Jacobs</td>
                                                        <td>Shoes</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Tom</td>
                                                        <td>Ford</td>
                                                        <td>Tom Ford</td>
                                                        <td>Clothing, Suits</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Jimmy</td>
                                                        <td>Choo</td>
                                                        <td>Jimmy Choo</td>
                                                        <td>Shoes</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                            <pre>This is a test</pre>
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Hover rows</strong></p>
                                            <p>Add <mark>.table-hover</mark> to enable a hover state on table rows within a <code>&lt;table&gt;</code>.</p>
                                            <div class="pad-sep-20">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Brand</th>
                                                        <th>Product</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Mark</td>
                                                        <td>Jacobs</td>
                                                        <td>Mark Jacobs</td>
                                                        <td>Shoes</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Tom</td>
                                                        <td>Ford</td>
                                                        <td>Tom Ford</td>
                                                        <td>Clothing, Suits</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Jimmy</td>
                                                        <td>Choo</td>
                                                        <td>Jimmy Choo</td>
                                                        <td>Shoes</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                            <pre>This is a test</pre>
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Condensed table</strong></p>
                                            <p>Add <mark>.table-hover</mark> to make tables more compact by cutting cell padding in half.</p>
                                            <div class="pad-sep-20">
                                                <table class="table table-condensed">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Brand</th>
                                                        <th>Product</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Mark</td>
                                                        <td>Jacobs</td>
                                                        <td>Mark Jacobs</td>
                                                        <td>Shoes</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Tom</td>
                                                        <td>Ford</td>
                                                        <td>Tom Ford</td>
                                                        <td>Clothing, Suits</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td>Jimmy</td>
                                                        <td>Choo</td>
                                                        <td>Jimmy Choo</td>
                                                        <td>Shoes</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                            <pre>This is a test</pre>
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Resposive table </strong></p>
                                            <p>Create responsive tables by wrapping any <mark>.table</mark> in <mark>.table-responsive</mark> to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.</p>
                                            <div class="pad-sep-20">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Table heading</th>
                                                            <th>Table heading</th>
                                                            <th>Table heading</th>
                                                            <th>Table heading</th>
                                                            <th>Table heading</th>
                                                            <th>Table heading</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                            <td>Table cell</td>
                                                        </tr>
                                                        <tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                            <pre>This is a test</pre>
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Contextual classes</strong></p>
                                            <p>You can use contextual classes to color table rows or individual cells.</p>
                                            <div class="pad-sep-20">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Table heading</th>
                                                        <th>Table heading</th>
                                                        <th>Table heading</th>
                                                        <th>Table heading</th>
                                                        <th>Table heading</th>
                                                        <th>Table heading</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="active">
                                                        <td>Active row</td>
                                                        <td>Active row</td>
                                                        <td>Active row</td>
                                                        <td>Active row</td>
                                                        <td>Active row</td>
                                                        <td>Active row</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="active">Active cell</td>
                                                        <td class="success">Success cell</td>
                                                        <td class="warning">Warning cell</td>
                                                        <td class="danger">Danger cell</td>
                                                        <td class="info">Info cell</td>
                                                        <td class="info">Info cell</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                            <pre>This is a test</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="basicForms" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Forms</strong></h4>
                                            <p><strong>Basic example:</strong></p>
                                            <p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <mark>.form-control</mark> are set to width: 100%; by default. Wrap labels and controls in <mark>.form-group</mark> for optimum spacing. Don't forget the <mark>.control-label</mark> class for the labels and the <mark>.help-block</mark> class for the error message itself.</p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <form id="exampleForm1" action="" method="post">
                                                            <fieldset>
                                                                <legend class="sr-only">Simple form</legend>
                                                                <div class="form-group has-error">
                                                                    <label class="control-label" for="exampleInputEmail1">Email address</label>
                                                                    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" placeholder="example@example.com" required>
                                                                    <div class="help-block"><i class="fa fa-info-circle fonts-up-120"></i> This is an example error message.</div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label" for="exampleInputPassword1">Password</label>
                                                                    <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="password" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" id="exampleCheckbox1" name="exampleCheckbox1" required> Remember me?
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="panel-controls pull-right">
                                                                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i><span>Sign in</span></button>
                                                                        <button type="reset" class="btn btn-default"><i class="fa fa-remove"></i><span>Cancel</span></button>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Inline form example:</strong></p>
                                            <p>Add <mark>.form-inline</mark> to your form (which doesn't have to be a <code>&lt;form&gt;</code>) for left-aligned and inline-block controls. This only applies to forms within viewports that are at least <b>768px</b> wide.</p>
                                            <div class="alert alert-info">
                                                <i class="fa fa-info-circle fonts-up-140"></i>
                                                <b> Don't forget about screen readers!</b> Users might end up having trouble with your forms if you don't include a label for every input. You can hide the labels using the <mark>.sr-only</mark> class. There are further alternative methods of providing a label for assistive technologies, such as the <mark>aria-label</mark>, <mark>aria-labelledby</mark> or <mark>title</mark> attribute. If none of these is present, screen readers may resort to using the placeholder attribute, if present, but note that use of placeholder as a replacement for other labelling methods <b>is not advised</b>.
                                            </div>
                                            <div class="pad-sep-20 pad-top-40 text-center">
                                                <form class="form-inline" id="exampleForm2" action="" method="post">
                                                    <fieldset>
                                                        <legend class="sr-only">Simple Inline Form</legend>
                                                        <div class="form-group">
                                                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail2" name="exampleInputEmail2" placeholder="example@example.com" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword2" name="exampleInputPassword2" placeholder="password" required>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="exampleCheckbox2" name="exampleCheckbox2" required> Remember me?
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i><span>Sign in</span></button>
                                                        <button type="reset" class="btn btn-default"><i class="fa fa-remove"></i><span>Cancel</span></button>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Horizontal form example:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <form class="form-horizontal">
                                                            <fieldset>
                                                                <legend class="sr-only">Simple horizontal form</legend>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail3" class="col-sm-3 control-label">Email address</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="email" class="form-control" id="exampleInputEmail3" name="exampleInputEmail3" placeholder="example@example.com" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword3" class="col-sm-3 control-label">Password</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="password" class="form-control" id="exampleInputPassword3" name="exampleInputPassword3" placeholder="password" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-sm-offset-3 col-sm-9">
                                                                        <div class="checkbox">
                                                                            <label>
                                                                                <input type="checkbox" id="exampleCheckbox3" name="exampleCheckbox3" required> Remember me?
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-sm-offset-3 col-sm-9">
                                                                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i><span>Sign in</span></button>
                                                                        <button type="reset" class="btn btn-default"><i class="fa fa-remove"></i><span>Cancel</span></button>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Form with column sizing example:</strong></p>
                                            <p>You can also benefit from a mix between the inline form and the regular form display, by using the <b>grid system</b> to your advantage. This is especially helpful whenever forms fields need to be displayed in a certain way, depending on the device width.</p>
                                            <div class="alert alert-info">
                                                <i class="fa fa-info-circle fonts-up-140"></i>
                                                <b> Don't forget about that the grid system can make inline elements break-row!</b> Use the <mark>.truncate</mark> class on text elements like labels, links, buttons, etc. to hide the content that exceeds the grid size.
                                            </div>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-10 col-lg-offset-1">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-2 col-md-1">
                                                                    <label for="exampleCheckbox4" class="truncate control-label">Nr.</label>
                                                                    <div class="form-sep">
                                                                        <span>
                                                                            <input type="checkbox" id="exampleCheckbox4" name="exampleCheckbox4" required>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-10 col-md-5">
                                                                    <label for="exampleInputName4" class="control-label truncate">First name</label>
                                                                    <input type="text" class="form-control" id="exampleInputName4" name="exampleInputName4" required>
                                                                </div>
                                                                <div class="col-xs-12 pad-top-20 visible-xs-block visible-sm-block"></div>
                                                                <div class="col-xs-12 col-md-6">
                                                                    <label for="exampleInputLastName4" class="control-label truncate">Last name</label>
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-md-9">
                                                                            <input type="text" class="form-control" id="exampleInputLastName4" name="exampleInputLastName4" required>
                                                                        </div>
                                                                        <div class="col-xs-12 pad-top-40 visible-xs-block visible-sm-block"></div>
                                                                        <div class="col-xs-12 col-md-3">
                                                                            <button type="button" class="btn btn-primary btn-block truncate" title="Check this name out">
                                                                                <i class="fa fa-check"></i>
                                                                                <span class="visible-xs visible-sm">Check</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Input types sizing:</strong></p>
                                            <p>Individual form controls.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <form>
                                                            <div class="form-group">
                                                                <input class="form-control input-lg" type="text" placeholder=".input-lg">
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" placeholder=" default input">
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control input-sm" type="text" placeholder=" .input-sm">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Form groups with labels and form controls. (only works with form-horizontal)</p>
                                            <form class="form-horizontal">
                                                <div class="form-group form-group-lg">
                                                    <label class="col-sm-2 control-label" for="formGroupInputLarge"><span class="truncate">Large label</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Large input">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" for="formGroupInputNormal"><span class="truncate">Default label</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="formGroupInputNormal" placeholder="Default input">
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-sm">
                                                    <label class="col-sm-2 control-label" for="formGroupInputSmall"><span class="truncate">Small label</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Small input">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Input types states:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <form>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" placeholder="Disabled input" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" placeholder="Readonly input" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="form-control" disabled>
                                                                    <option value="1">First option</option>
                                                                    <option value="2">Second option</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="checkboxSuccess" value="option1" disabled>
                                                                        Disabled checkbox
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-success" disabled><i class="fa fa-check"></i><span>Disabled button</span></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Input types validation:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <form>
                                                            <div class="form-group has-success">
                                                                <label class="control-label" for="inputSuccess1">Input with success</label>
                                                                <input type="text" class="form-control" id="inputSuccess1">
                                                                <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                                            </div>
                                                            <div class="form-group has-success">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="checkboxSuccess" value="option1">
                                                                        Checkbox with success
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group has-warning">
                                                                <label class="control-label" for="inputWarning1">Input with warning</label>
                                                                <input type="text" class="form-control" id="inputWarning1">
                                                            </div>
                                                            <div class="form-group has-warning">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="checkboxWarning">
                                                                        Checkbox with warning
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group has-error">
                                                                <label class="control-label" for="inputError1">Input with error</label>
                                                                <input type="text" class="form-control" id="inputError1">
                                                            </div>
                                                            <div class="form-group has-error">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" id="checkboxError">
                                                                        Checkbox with error
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Input types with feedback:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="form-group has-success has-feedback">
                                                            <label class="control-label" for="inputSuccess2">Input with success mark</label>
                                                            <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
                                                            <span class="fa fa-check form-control-feedback" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                        </div>
                                                        <div class="form-group has-warning has-feedback">
                                                            <label class="control-label" for="inputWarning2">Input with warning mark</label>
                                                            <input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status">
                                                            <span class="fa fa-warning form-control-feedback" aria-hidden="true"></span>
                                                            <span id="inputWarning2Status" class="sr-only">(warning)</span>
                                                        </div>
                                                        <div class="form-group has-error has-feedback">
                                                            <label class="control-label" for="inputError2">Input with error mark</label>
                                                            <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status">
                                                            <span class="fa fa-remove form-control-feedback" aria-hidden="true"></span>
                                                            <span id="inputError2Status" class="sr-only">(error)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Checkboxes and radio buttons:</strong></p>

                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <p>Standard checkbox:</p>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="">
                                                            This is option one.
                                                            </label>
                                                        </div>
                                                        <div class="checkbox disabled">
                                                            <label>
                                                                <input type="checkbox" value="" disabled>
                                                            Option two is disabled
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <p>Inline checkboxes:</p>
                                                        <div class="form-group">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <p>Standard radio button:</p>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                                This is option one.
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                                Option two can be something else and selecting it will deselect option one.
                                                            </label>
                                                        </div>
                                                        <div class="radio disabled">
                                                            <label>
                                                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                                                Option three is disabled
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <p>Inline radio buttons:</p>
                                                        <div class="form-group">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Range input types:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <p>Default range input:</p>
                                                        <div class="form-group">
                                                            <input type="range" name="points" min="0" max="100" step="5" value="5">
                                                        </div>
                                                        <p>Range inputs with validation:</p>
                                                        <div class="form-group has-success">
                                                            <input type="range" name="points" min="0" max="100" step="5" value="5">
                                                        </div>
                                                        <div class="form-group has-warning">
                                                            <input type="range" name="points" min="0" max="100" step="5" value="5">
                                                        </div>
                                                        <div class="form-group has-error">
                                                            <input type="range" name="points" min="0" max="100" step="5" value="5">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Input groups:</strong></p>
                                            <p>Extend form controls by adding text or buttons before, after, or on both sides of any text-based <code>&lt;input&gt;</code>. Use <mark>.input-group</mark> with an <mark>.input-group-addon</mark> or <mark>.input-group-btn</mark> to prepend or append elements to a single <mark>.form-control</mark>.</p>
                                            <div class="alert alert-info">
                                                <p><i class="fa fa-info-circle fonts-up-140"></i> Avoid using <code>&lt;select&gt;</code> elements here as they cannot be fully styled in WebKit browsers. Avoid using <code>&lt;textarea&gt;</code> elements here as their rows attribute will not be respected in some cases.</p>
                                            </div>
                                            <div class="alert alert-warning">
                                                <p><i class="fa fa-warning fonts-up-140"></i> Do not mix form groups or grid column classes directly with input groups. Instead, nest the input group inside of the form group or grid-related element.</p>
                                            </div>
                                            <div class="alert alert-danger">
                                                <p><i class="fa fa-remove fonts-up-140"></i> PHOTON does not support multiple add-ons (<mark>.input-group-addon</mark> or <mark>.input-group-btn</mark>) on a single side. It also does not support multiple form-controls in a single input group.</p>
                                            </div>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputGroupStandard">Input group</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="inputGroupStandard" placeholder="Recipient's email" aria-describedby="basic-addon2">
                                                                <span class="input-group-addon" id="basic-addon2">@example.com</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group has-success has-feedback">
                                                            <label class="control-label" for="inputGroupSuccess1">Input group with success</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" value="jon_snow">
                                                                <span class="input-group-addon">@example.com</span>
                                                            </div>
                                                            <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">$</span>
                                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                                <span class="input-group-addon">.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Input groups with checkboxes and radio buttons:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <input type="checkbox" aria-label="...">
                                                                    </span>
                                                                    <input type="text" class="form-control" aria-label="...">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <input type="radio" aria-label="...">
                                                                    </span>
                                                                    <input type="text" class="form-control" aria-label="...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Input groups with buttons:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-default" type="button">Go!</button>
                                                                    </span>
                                                                    <input type="text" class="form-control" placeholder="Search for...">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Search for...">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-default" type="button">Go!</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Input groups with dropdowns:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="input-group">
                                                            <div class="input-group-btn">
                                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="#">Action</a></li>
                                                                    <li><a href="#">Another action</a></li>
                                                                    <li><a href="#">Something else here</a></li>
                                                                    <li role="separator" class="divider"></li>
                                                                    <li><a href="#">Separated link</a></li>
                                                                </ul>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Input groups with multiple buttons:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-offset-2">
                                                        <div class="input-group">
                                                            <div class="input-group-btn">
                                                                <button type="button" class="btn btn-default" aria-label="Bold">
                                                                    <span class="fa fa-bold"></span>
                                                                </button>
                                                                <button type="button" class="btn btn-default" aria-label="Italic">
                                                                    <span class="fa fa-italic"></span>
                                                                </button>
                                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="caret"></span> <span class="sr-only">Toggle Dropdown</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="#">Action</a></li>
                                                                    <li><a href="#">Another action</a></li>
                                                                    <li><a href="#">Something else here</a></li>
                                                                    <li role="separator" class="divider"></li>
                                                                    <li><a href="#">Separated link</a></li>
                                                                </ul>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Text input with multiple buttons">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="buttons" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Buttons</strong></h4>
                                            <p><strong>Default styling:</strong></p>
                                            <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <a class="btn btn-default" href="#" role="button">Link</a>
                                                        <button type="button" class="btn btn-default">Button</button>
                                                        <input type="button" class="btn btn-default" value="Input">
                                                        <input type="submit" class="btn btn-default" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Contextual classes:</strong></p>
                                            <p>Use any of the available button classes to quickly create a styled button. ex: <mark>.btn-primary</mark>, <mark>.btn-success</mark>, <mark>.btn-danger</mark>...etc.</p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-default">Default</button>
                                                    <button type="button" class="btn btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-success">Success</button>
                                                    <button type="button" class="btn btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-link">Link</button>
                                                </div>
                                            </div>
                                            <div class="alert alert-info">
                                                <i class="fa fa-info-circle fonts-up-140"></i> Using color to add meaning to a button only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (the visible text of the button), or is included through alternative means, such as additional text hidden with the <mark>.sr-only</mark> class.
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Button sizing:</strong></p>
                                            <div class="pad-sep-20 pad-top-40 text-center">
                                                <p>
                                                    <button type="button" class="btn btn-primary btn-lg fonts-up-200"><i class="fa fa-cog"></i><span>Enhanced</span></button>
                                                    <button type="button" class="btn btn-primary btn-lg"><i class="fa fa-cog"></i><span>Large button</span></button>
                                                    <button type="button" class="btn btn-primary"><i class="fa fa-cog"></i><span>Default button</span></button>
                                                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-cog"></i><span>Small button</span></button>
                                                    <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i><span>Extra small button</span></button>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Button states:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <p>
                                                            <a class="btn btn-default" href="#" role="button">Default</a>
                                                            <button class="btn btn-primary" type="submit">Default</button>
                                                        </p>
                                                        <br>
                                                        <p>
                                                            <a class="btn btn-default active" href="#" role="button">Active</a>
                                                            <button class="btn btn-primary active" type="submit">Active</button>
                                                        </p>
                                                        <br>
                                                        <p>
                                                            <a class="btn btn-default disabled" href="#" role="button">Disabled</a>
                                                            <button class="btn btn-primary" type="submit" disabled="">Disabled</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Button groups:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="btn-group" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-primary">Left</button>
                                                            <button type="button" class="btn btn-success">Middle</button>
                                                            <button type="button" class="btn btn-danger">Right</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Justified button groups:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                                            <div class="btn-group btn-group-lg" role="group">
                                                                <button type="button" class="btn btn-default"><i class="fa fa-bars"></i></button>
                                                            </div>
                                                            <div class="btn-group btn-group-lg" role="group">
                                                                <button type="button" class="btn btn-danger"><i class="fa fa-heart"></i></button>
                                                            </div>
                                                            <div class="btn-group btn-group-lg" role="group">
                                                                <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                                                            </div>
                                                            <div class="btn-group btn-group-lg" role="group">
                                                                <button type="button" class="btn btn-default"><i class="fa fa-camera"></i></button>
                                                            </div>
                                                            <div class="btn-group btn-group-lg" role="group">
                                                                <button type="button" class="btn btn-default"><i class="fa fa-bell"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Button toolbar:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="btn-toolbar" role="toolbar" aria-label="...">
                                                            <div class="btn-group" role="group" aria-label="...">
                                                                <button type="button" class="btn btn-default"><i class="fa fa-magic"></i></button>
                                                            </div>
                                                            <div class="btn-group" role="group" aria-label="...">
                                                                <button type="button" class="btn btn-default"><i class="fa fa-bold"></i></button>
                                                                <button type="button" class="btn btn-default"><i class="fa fa-italic"></i></button>
                                                                <button type="button" class="btn btn-default"><i class="fa fa-underline"></i></button>
                                                            </div>
                                                            <div class="btn-group" role="group" aria-label="...">
                                                                <button type="button" class="btn btn-default">Helvetica</button>
                                                            </div>
                                                            <div class="btn-group" role="group" aria-label="...">
                                                                <button type="button" class="btn btn-default"><i class="fa fa-font"></i></button>
                                                                <button type="button" class="btn btn-default"><i class="fa fa-caret-down"></i></button>
                                                            </div>
                                                            <div class="btn-group" role="group" aria-label="...">
                                                                <button type="button" class="btn btn-primary">X</button>
                                                                <button type="button" class="btn btn-success">Y</button>
                                                                <button type="button" class="btn btn-danger">X</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Button groups sizing:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="btn-group btn-group-lg" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-default">LG</button>
                                                            <button type="button" class="btn btn-default">LG</button>
                                                        </div>
                                                        <div class="btn-group" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-default">DF</button>
                                                            <button type="button" class="btn btn-default">DF</button>
                                                        </div>
                                                        <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-default">SM</button>
                                                            <button type="button" class="btn btn-default">SM</button>
                                                        </div>
                                                        <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                                            <button type="button" class="btn btn-default">XS</button>
                                                            <button type="button" class="btn btn-default">XS</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Vertical button groups:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                            <button type="button" class="btn btn-primary">Button</button>
                                                            <button type="button" class="btn btn-primary">Button</button>
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown <span class="caret"></span></button>
                                                                <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                    <li><a href="#">Dropdown link</a></li>
                                                                    <li><a href="#">Dropdown link</a></li>
                                                                </ul>
                                                            </div>
                                                            <button type="button" class="btn btn-primary">Button</button>
                                                            <button type="button" class="btn btn-primary">Button</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Button blocks:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <button type="button" class="btn btn-block btn-default">Default</button>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="button" class="btn btn-block btn-primary">Primary</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <button type="button" class="btn btn-block btn-success">Success</button>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="button" class="btn btn-block btn-danger">Danger</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssFlipswitch" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>CSS Flipswitch</strong></h4>
                                            <p>You can change the contextual styling of the flipswitch by using any of the available <mark>switch-*</mark> classes.</p>
                                            <div class="alert alert-info" role="alert"><p><i class="fa fa-info-circle fonts-up-140"></i>
                                                The flip-switch items are based on a checkbox form-element. In order to display the flip-switch in the "on" or "off" state, make sure to add or remove the "checked" attribute from the "checkbox" input type.
                                                </p></div>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2 text-center">
                                                        <p>
                                                            <label class="switch switch-primary">
                                                                <input type="checkbox" class="switch-input" name="card_status_0" checked="">
                                                                <span class="switch-label"></span>
                                                                <span class="switch-handle"></span>
                                                            </label>
                                                            <label class="switch switch-info">
                                                                <input type="checkbox" class="switch-input" name="card_status_0" checked="">
                                                                <span class="switch-label"></span>
                                                                <span class="switch-handle"></span>
                                                            </label>
                                                            <label class="switch switch-success">
                                                                <input type="checkbox" class="switch-input" name="card_status_0" checked="">
                                                                <span class="switch-label"></span>
                                                                <span class="switch-handle"></span>
                                                            </label>
                                                            <label class="switch switch-warning">
                                                                <input type="checkbox" class="switch-input" name="card_status_0" checked="">
                                                                <span class="switch-label"></span>
                                                                <span class="switch-handle"></span>
                                                            </label>
                                                            <label class="switch switch-danger">
                                                                <input type="checkbox" class="switch-input" name="card_status_0" checked="">
                                                                <span class="switch-label"></span>
                                                                <span class="switch-handle"></span>
                                                            </label>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssPagination" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Pagination</strong></h4>
                                            <p><strong>Default styling:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2 text-center">
                                                        <nav>
                                                            <ul class="pagination">
                                                                <li>
                                                                    <a href="#" aria-label="Previous">
                                                                        <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
                                                                    </a>
                                                                </li>
                                                                <li><a href="#">1</a></li>
                                                                <li><a href="#">2</a></li>
                                                                <li><a href="#">3</a></li>
                                                                <li><a href="#">4</a></li>
                                                                <li><a href="#">5</a></li>
                                                                <li>
                                                                    <a href="#" aria-label="Next">
                                                                        <span aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Disabled and active states:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2 text-center">
                                                        <nav>
                                                            <ul class="pagination">
                                                                <li class="disabled">
                                                                    <a href="#" aria-label="Previous">
                                                                        <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
                                                                    </a>
                                                                </li>
                                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                                                <li><a href="#">2</a></li>
                                                                <li><a href="#">3</a></li>
                                                                <li><a href="#">4</a></li>
                                                                <li><a href="#">5</a></li>
                                                                <li>
                                                                    <a href="#" aria-label="Next">
                                                                        <span aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Pagination sizing:</strong></p>
                                            <p>So hey, listen! You can add <mark>.pagination-lg</mark> or <mark>.pagination-sm</mark> for additional sizes.</p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2 text-center">
                                                        <nav>
                                                            <ul class="pagination pagination-lg">
                                                                <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-arrow-left"></i></span></a></li>
                                                                <li><a href="#">1</a></li>
                                                                <li><a href="#">2</a></li>
                                                                <li><a href="#">3</a></li>
                                                                <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-arrow-right"></i></span></a></li>
                                                            </ul>
                                                        </nav>
                                                        <nav>
                                                            <ul class="pagination">
                                                                <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-arrow-left"></i></span></a></li>
                                                                <li><a href="#">1</a></li>
                                                                <li><a href="#">2</a></li>
                                                                <li><a href="#">3</a></li>
                                                                <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-arrow-right"></i></span></a></li>
                                                            </ul>
                                                        </nav>
                                                        <nav>
                                                            <ul class="pagination pagination-sm">
                                                                <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-arrow-left"></i></span></a></li>
                                                                <li><a href="#">1</a></li>
                                                                <li><a href="#">2</a></li>
                                                                <li><a href="#">3</a></li>
                                                                <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-arrow-right"></i></span></a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Default pager:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2 text-center">
                                                        <nav>
                                                            <ul class="pager">
                                                                <li><a href="#">Previous</a></li>
                                                                <li><a href="#">Next</a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Aligned pager:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2 text-center">
                                                        <nav>
                                                            <ul class="pager">
                                                                <li class="previous">
                                                                    <a href="#" aria-label="Previous">
                                                                        <span aria-hidden="true"><i class="fa fa-arrow-left"></i> Older</span>
                                                                    </a>
                                                                </li>
                                                                <li class="next">
                                                                    <a href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">Newer <i class="fa fa-arrow-right"></i></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Optional pager states:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2 text-center">
                                                        <nav>
                                                            <ul class="pager">
                                                                <li class="previous disabled">
                                                                    <a href="#" aria-label="Previous">
                                                                        <span aria-hidden="true"><i class="fa fa-arrow-left"></i> Older</span>
                                                                    </a>
                                                                </li>
                                                                <li class="next">
                                                                    <a href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">Newer <i class="fa fa-arrow-right"></i></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssNavs" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Navs</strong></h4>
                                            <p><strong>Default styling:</strong></p>
                                            <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                                            <div class="pad-sep-20 pad-top-40">
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssNavs" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Pills</strong><small> (Yeah, not that kind of pills)</small></h4>
                                            <p><strong>Default styling:</strong></p>
                                            <div class="pad-sep-20 pad-top-40">
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssBreadcrumbs" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Breadcrumbs</strong></h4>
                                            <p><strong>Default styling:</strong></p>
                                            <div class="pad-sep-20 text-center">
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssTooltips" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>CSS Tooltips</strong></h4>
                                            <p><strong>Default styling:</strong></p>
                                            <div class="pad-sep-20 text-center">
                                                <h3>A h3 heading with a tooltip. Relax! <a href="javascript:void(0)" class="info-tooltip tt-default" data-content="This is a test to see if this stuff works as predicted."><i class="fa fa-info"></i></a></h3>
                                                <hr>
                                                <p><a href="javascript:void(0)" class="info-tooltip" data-content="Wow, such tooltip. Very fast. Much style."><strong>Regular text can have a tooltip too!</strong></a></p>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Contextual alternatives:</strong></p>
                                            <div class="pad-sep-20 text-center">
                                                <h4>
                                                    <span class="visible-md-inline visible-lg-inline">Default: </span>
                                                    <a href="javascript:void(0)" class="info-tooltip tt-default" data-content="This is a test to see if this stuff works as predicted."><i class="fa fa-info"></i></a>
                                                    <span class="visible-md-inline visible-lg-inline">Primary: </span>
                                                    <a href="javascript:void(0)" class="info-tooltip tt-primary" data-content="This is a test to see if this stuff works as predicted."><i class="fa fa-info"></i></a>
                                                    <span class="visible-md-inline visible-lg-inline">Info: </span>
                                                    <a href="javascript:void(0)" class="info-tooltip tt-info" data-content="This is a test to see if this stuff works as predicted."><i class="fa fa-info"></i></a>
                                                    <span class="visible-md-inline visible-lg-inline">Success: </span>
                                                    <a href="javascript:void(0)" class="info-tooltip tt-success" data-content="This is a test to see if this stuff works as predicted."><i class="fa fa-info"></i></a>
                                                    <span class="visible-md-inline visible-lg-inline">Warning: </span>
                                                    <a href="javascript:void(0)" class="info-tooltip tt-warning" data-content="This is a test to see if this stuff works as predicted."><i class="fa fa-info"></i></a>
                                                    <span class="visible-md-inline visible-lg-inline">Danger: </span>
                                                    <a href="javascript:void(0)" class="info-tooltip tt-danger" data-content="This is a test to see if this stuff works as predicted."><i class="fa fa-info"></i></a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Button integration:</strong></p>
                                            <div class="pad-sep-20 text-center">
                                                <p>
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-default info-tooltip tt-left" data-content="This is a test to see if this stuff works as predicted."><strong>On the left</strong></a>
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-default info-tooltip" data-content="This is a test to see if this stuff works as predicted."><strong>On top</strong></a>
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-default info-tooltip tt-bottom" data-content="This is a test to see if this stuff works as predicted."><strong>At the bottom</strong></a>
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-default info-tooltip tt-right" data-content="This is a test to see if this stuff works as predicted."><strong>On the right</strong></a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssLabelsandBadges" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Labels and badges</strong></h4>
                                            <p><strong>Default label:</strong></p>
                                            <div class="pad-sep-20 text-center">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <h1>Heading with label <span class="label label-default">New</span></h1>
                                                        <h2>Heading with label <span class="label label-default">New</span></h2>
                                                        <h3>Heading with label <span class="label label-default">New</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Contextual alternatives:</strong></p>
                                            <div class="pad-sep-20 text-center">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <span class="label label-default">Default</span>
                                                        <span class="label label-primary">Primary</span>
                                                        <span class="label label-info">Info</span>
                                                        <span class="label label-success">Success</span>   
                                                        <span class="label label-danger">Danger</span>
                                                        <span class="label label-warning">Warning</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Default badge:</strong></p>                                            
                                            <div class="pad-sep-20 text-center">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <p>This is the infamous badge. It can hold <strong>a large number of digits</strong> and it can be used as an inline element.</p>
                                                        <p>This is the exact number of people that want to destroy the world:</p>
                                                        <button type="button" id="blow_my_world" class="btn btn-danger">Destroy <span class="badge">0</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-info"><p><i class="fa fa-info-circle fonts-up-140"></i>
                                                <strong>Feature not a bug alert:</strong> When there are no new or unread items, badges will simply collapse (via CSS's <mark>:empty</mark> selector) provided no content exists within.</p>
                                            </div>
                                            <div class="alert alert-warning"><p><i class="fa fa-warning fonts-up-140"></i>
                                                Badges do not have contextual alternatives because they are badges. <strong>Use labels instead.</strong>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssAlertsandNotifications" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Alerts and notifications</strong></h4>
                                            <p><strong>Basic alerts:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="alert alert-info" role="alert"><p><i class="fa fa-info-circle fonts-up-140"></i>
                                                            <strong> We've received your application.</strong> We'll let you know what we think in a while.</p>
                                                        </div>
                                                        <div class="alert alert-success" role="alert"><p><i class="fa fa-check-circle fonts-up-140"></i>
                                                            <strong> Congratulations!</strong> We think you're cool.</p>
                                                        </div>                                                
                                                        <div class="alert alert-warning" role="alert"><p><i class="fa fa-warning fonts-up-140"></i>
                                                            <strong> Pending.</strong> Your submission is currently under analysis.</p>
                                                        </div>
                                                        <div class="alert alert-danger" role="alert"><p><i class="fa fa-times-circle fonts-up-140"></i>
                                                            <strong> Yeah, unfortunatelly...</strong> We think that you should come in on Saturday and Sunday.</p>
                                                        </div>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Dismissible alerts:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="alert alert-warning alert-dismissible" role="alert">
                                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-remove"></i></button>
                                                          <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Links in alerts:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="alert alert-info alert-dismissible fade in" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-remove"></i></button>
                                                            This is a simple dismissable notification. <a href="javascript:void(0)" class="alert-link">This one also has a clickable link</a>. Nothing else.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Alerts with buttons:</strong></p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-remove"></i></button>
                                                            <h4><strong>Oh snap! You got an error!</strong></h4>
                                                            <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                                                            <div class="pad-top-20">
                                                                <button type="button" class="btn btn-danger">There's nowhere you can hide</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssProgressBars" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Progress bars</strong></h4>
                                            <p><strong>Default styling:</strong></p>
                                            <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                                            <div class="pad-sep-20 pad-top-40">
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssPanels" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Panels</strong></h4>
                                            <p><strong>Default styling:</strong></p>
                                            <p>Easily add a heading container to your panel with <mark>.panel-heading</mark>. You may also include any <code>&lt;h1&gt; - &lt;h6&gt;</code> with a <mark>.panel-title</mark> class to add a pre-styled heading. However, the font sizes of <code>&lt;h1&gt; - &lt;h6&gt;</code> are overridden by <mark>.panel-heading</mark>.For proper link coloring, be sure to place links in headings within <mark>.panel-title</mark>.</p>
                                            <p><strong>Basic panel:</strong></p>
                                            <div class="pad-sep-20 ">
                                                <div class="row">
                                                    <div class="col-lg-10 col-lg-offset-1">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                Basic panel-body example
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Panel with heading:</strong></p>
                                            <div class="pad-sep-20 ">
                                                <div class="row">
                                                    <div class="col-lg-10 col-lg-offset-1">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">Panel title</h4>
                                                            </div>
                                                            <div class="panel-body">
                                                                Panel content
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Panel with footer:</strong></p>
                                            <div class="pad-sep-20 ">
                                                <div class="row">
                                                    <div class="col-lg-10 col-lg-offset-1">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">Panel title</h4>
                                                            </div>
                                                            <div class="panel-body">
                                                                Panel content
                                                            </div>
                                                            <div class="panel-footer">
                                                                Panel footer
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Contextual alternatives:</strong></p>
                                            <div class="alert alert-info" role="alert">
                                                <i class="fa fa-info-circle"></i> You can basically change the appearance of the panel by replacing the <code>panel-default</code> class from the example below, with the standard contextual alternatives: <code>panel-primary</code>, <code>panel-info</code>, <code>panel-success</code>, <code>panel-warning</code>, <code>panel-danger</code></div>
                                            </div>
                                            <div class="pad-sep-20 ">
                                                <div class="row">
                                                    <div class="col-lg-10 col-lg-offset-1">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">Panel title</h4>
                                                            </div>
                                                            <div class="panel-body">
                                                                Panel content
                                                            </div><div class="panel-footer">
                                                                Panel footer
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">Panel title</h4>
                                                            </div>
                                                            <div class="panel-body">
                                                                Panel content
                                                            </div>
                                                            <div class="panel-footer">
                                                                Panel footer
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-success">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">Panel title</h4>
                                                            </div>
                                                            <div class="panel-body">
                                                                Panel content
                                                            </div>
                                                            <div class="panel-footer">
                                                                Panel footer
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-warning">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">Panel title</h4>
                                                            </div>
                                                            <div class="panel-body">
                                                                Panel content
                                                            </div><div class="panel-footer">
                                                                Panel footer
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-danger">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">Panel title</h4>
                                                            </div>
                                                            <div class="panel-body">
                                                                Panel content
                                                            </div><div class="panel-footer">
                                                                Panel footer
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Panel with table:</strong></p>
                                            <div class="pad-sep-20 ">
                                                <div class="row">
                                                    <div class="col-lg-10 col-lg-offset-1">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">Panel with table example</h4>
                                                            </div>
                                                            <div class="panel-body">
                                                                <span>Some text or a couple of buttons can be placed here</span>
                                                            </div>
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>First Name</th>
                                                                    <th>Last Name</th>
                                                                    <th>Username</th>
                                                                    <th>Hobby</th>
                                                                </tr></thead>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                    <td>Fishing</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>@fat</td>
                                                                    <td>Racing</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Larry</td>
                                                                    <td>the Bird</td>
                                                                    <td>@twitter</td>
                                                                    <td>eMAG</td>
                                                                </tr></tbody>
                                                            </table>
                                                            </div>
                                                            <div class="panel-body">
                                                                <span>More text or a couple of buttons can be placed here</span>
                                                            </div>
                                                            <div class="panel-footer">
                                                                <span>Footer controls or text can be placed here</span>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-info" role="alert">
                                                <i class="fa fa-info-circle"></i> You can also use the standard bootstrap alternatives for styling a table: <a href="http://getbootstrap.com/css/#tables">Show me how Bootstrap does table stuff.</a>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                        <div class="show-panel-body">
                                            <p><strong>Panel with standard list group:</strong></p>
                                            <div class="pad-sep-20 ">
                                                <div class="row">
                                                    <div class="col-lg-10 col-lg-offset-1">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">Panel with list group example</h4>
                                                            </div>
                                                            <div class="panel-body">
                                                                <span>Some text or a couple of buttons can be placed here</span>
                                                            </div>
                                                            <div class="list-group">
                                                                <a href="#" class="list-group-item">
                                                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                                </a>
                                                                <a href="#" class="list-group-item">
                                                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                                                    <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                                                </a>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-info" role="alert">
                                                <i class="fa fa-info-circle"></i> You can also use the standard bootstrap alternatives for styling a list group: <a href="http://getbootstrap.com/components/#list-group">Show me how Bootstrap does list group stuff.</a>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssListGroups" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>List groups</strong></h4>
                                            <p><strong>Default styling:</strong></p>
                                            <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                                            <div class="pad-sep-20 pad-top-40">
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssJumbotron" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Jumbotron</strong></h4>
                                            <p><strong>Default styling:</strong></p>
                                            <p>A lightweight, flexible component that can optionally extend the entire viewport to showcase key content on your site.</p>
                                            <div class="pad-sep-20">
                                                <div class="jumbotron">
                                                    <h1>Hello, world!</h1>
                                                    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssJumbotron" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Page header</strong></h4>
                                            <p><strong>Default styling:</strong></p>
                                            <p>A simple shell for an h1 to appropriately space out and segment sections of content on a page. It can utilize the h1's default small element, as well as most other components (with additional styles).</p>
                                            <div class="pad-sep-20">
                                                <div class="page-header">
                                                    <h1>Example page header <small>Subtext for header</small></h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssEmbeds" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Responsive embeds</strong></h4>
                                            <p>Allow browsers to determine video or slideshow dimensions based on the width of their containing block by creating an intrinsic ratio that will properly scale on any device. Rules are directly applied to <code>&lt;iframe&gt;</code>, <code>&lt;embed&gt;</code>, <code>&lt;video&gt;</code>, and <code>&lt;object&gt;</code> elements; optionally use an explicit descendant class <mark>.embed-responsive-item</mark> when you want to match the styling for other attributes.</p>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/LeiFF0gvqcc" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pad-sep-20">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.127878354968!2d26.045893219230344!3d44.45104898408151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b20191a19c63f5%3A0x6dc43342346d8bc2!2seMAG+Bucuresti+Showroom!5e0!3m2!1sen!2sro!4v1454078315442" width="600" height="450" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="cssUtilities" class="pad-top-20">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="show-panel show-panel-example">
                                        <div class="show-panel-body">
                                            <h4 class="text-primary"><strong>Utilities</strong></h4>
                                            <p><strong>Default styling:</strong></p>
                                            <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                                            <div class="pad-sep-20 pad-top-40">
                                            </div>
                                        </div>
                                        <div class="show-panel-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- CONTENT:End -->
                <!-- FOOTER:Start -->
                <?php include_once "modules/_mod_footer.php"?>
                <!-- FOOTER:End -->
            </div>
        </div>
        <!-- PAGE:End -->
        <!-- POPUPS:Start -->
        <!-- POPUPS:End -->
        <!-- SCRIPTS:Start -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
        <script src="../dist/js/main_script.min.js"></script>
        <script src="../dist/js/demo_helpers.js"></script>
        <!-- SCRIPTS:End -->
        <!-- DOCUMENT-READY:Start -->
        <script type="text/javascript">
            $(document).ready(function() {
                console.log('Ready, Captain!');

                demoHelpers();  //Requires demo_helpers.js

                // This script is just for demo purposes //
                ///////////////////////////////////////////
                var i = 1;
                function blowWorld(selector, no) {
                    var thing = document.getElementById(selector);
                    thing.getElementsByClassName("badge")[0].innerHTML = no;
                };
                $('#blow_my_world').on('click',function(){
                var no = i++;
                    if(no >= 100){
                        alert("Yeah, alright, we get it buddy... It's cool, chill!");
                    } else {
                        blowWorld(this.id, no);
                    }
                });
                ///////////////////////////////////////////
                // That script was just for demo purposes //
            });
        </script>
        <!-- DOCUMENT-READY:End -->
    </body>
</html>