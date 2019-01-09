<html class="gr__sandbox_x7_org"><script type="text/javascript" charset="utf-8" id="zm-extension" src="chrome-extension://fdcgdnkidjaadafnichfpabhfomcebme/scripts/webrtc-patch.js" async=""></script><head>
    <meta charset="UTF-8">
    <title>Gap's CTA System</title>
    <link href="http://sandbox.x7.org/xchen/css/wcd-CTAdropdowns3.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="gfolExtension.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet"><link href="http://sandbox.x7.org/xchen/style.css" rel="stylesheet"><script type="text/javascript" src="http://sandbox.x7.org/xchen/sh/scripts/shCore.js"></script><script type="text/javascript" src="http://sandbox.x7.org/xchen/sh/scripts/shBrushJScript.js"></script><link type="text/css" rel="stylesheet" href="http://sandbox.x7.org/xchen/sh/styles/shCoreDefault.css"><script type="text/javascript">SyntaxHighlighter.all();</script><script type="text/javascript" src="chrome-extension://hkmpnondmidmfdlaphahbalnmphelnfo/js/success_plugin.js"></script></head>










<body style="" data-gr-c-s-loaded="true">

	  <header>
	  	<nav>
	  		<a href="http://sandbox.x7.org/xchen/index.php">Xian's Sandbox</a>
	  	</nav>
	  </header>

	<div class="content">
    <style>
      .content{
        background: #ccc;
      }
      .CTAwrapper{
        display: inline-block;
        width: 100%;
      }
      .CTAwrapper a,
      .tableOfContents a{
        font-style: normal;
      }

      @media (min-width: 768px){
        .tab{
          padding-left:20px;
        }
        .sub{
          padding-left:2%;
          /*border-left:2px solid #000;*/
        }
        .innerSub{
          padding-left:2%;
          border-left:2px solid #000;
        }
        ul.CTAmenu > li.CTAlist:not(:only-child){
          border-left: .5em solid transparent;
        }
      }
      @media (max-width: 767px){
        xmp{
          display:none;
        }
      }



      /* back to top 8 */
      #return-to-top {
          position: fixed;
          bottom: 20px;
          right: 20px;
      }
      #return-to-top i {
          color: #000;
          margin: 0;
          position: relative;
          top: 13px;
          font-size: 19px;
          -webkit-transition: all 0.3s ease;
          -moz-transition: all 0.3s ease;
          -ms-transition: all 0.3s ease;
          -o-transition: all 0.3s ease;
          transition: all 0.3s ease;
      }
      #return-to-top:hover i {
          text-decoration: none;
          color: #b4cf5a;
          top: 5px;
      }
      a#return-to-top:hover{
        text-decoration: none;
      }

    </style>


  <a href="javascript:" id="return-to-top" style="display: none;"><i class="icon-chevron-up">^ top</i></a>
  <div class="wrapper">

    <!-- intro -->
    <p>
      </p><h1>Gap's CTA/Dropdown System v3</h1>
      CHANGE LOG: <br>
      - Font size &amp; spacing adjustments <br>
      - Added evergreen hover states <br>
      - Added GapFactory Styles
      <!-- <strong><a href="http://www.gol.wip.gidapps.com/preview/launch.do?date=06/02/2018&targetURL=http://www.gol.wip.gidapps.com/browse/info.do?cid=1055472" target="_blank">View on WIP</a></strong> -->

      <br><br>

      <b>Link directly in Top Nav container only</b>. Pls do not edit:
      <div><div id="highlighter_275890" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">&lt;link rel=</code><code class="js string">"stylesheet"</code> <code class="js plain">type=</code><code class="js string">"text/css"</code> <code class="js plain">href=</code><code class="js string">"/Asset_Archive/GPWeb/content/0011/027/523/wcd-CTAdropdowns-v3.css"</code><code class="js plain">&gt;</code></div><div class="line number2 index1 alt1"><code class="js plain">&lt;script src=</code><code class="js string">"/Asset_Archive/GPWeb/content/0011/027/523/wcd-CTAdropdowns.js"</code><code class="js plain">&gt;&lt;/script&gt;</code></div></div></td></tr></tbody></table></div></div>
    <p></p>

    <br><br>

      <!-- table of contents -->
          <p>
      </p><h2>Table of Contents</h2>
      <ul class="tableOfContents">
        <li>1. <a href="#buttons">Buttons</a>
          <!-- <ul>
            <li>2a. <a href="#buttons">Default Buttons</a></li>
            <li>2b. <a href="#halfButtons">Half Buttons</a></li>
          </ul> -->
        </li>
        <li>2. <a href="#dropdowns">Dropdowns</a>
          <!-- <ul>
            <li>1a. <a href="#dropdowns">Default Dropdowns</a></li>
            <li>1b. <a href="#halfDropdowns">Half Dropdowns</a></li>
          </ul> -->
        </li>
        <li>3. <a href="#colorSchemes">Color Schemes</a>
          <ul>
            <li>3a. <a href="#fontBorder">Font &amp; Border Colors</a></li>
            <li>3b. <a href="#backgroundColor">Background Colors</a></li>
            <li>3c. <a href="#borderStyle">Border Styles</a></li>
            <li>3b. <a href="#hoverEffects">Hover States</a></li>
          </ul>
        </li>
        <li>4. <a href="#modifyers">Modifyers</a>
          <ul>
            <!-- <li>4a. <a href="#halfButtons">Button Modifyers</a>
              <ul>
                <li><a href="#vertList">i. Vertical List of Equal Widths</a></li>
                <li>i. <a href="#halfButtons">Half Buttons</a></li>
                <li>ii. <a href="#inlineBlockButtons">Inline Buttons</a></li>
              </ul>
            </li> -->
            <li>4b. <a href="#dropDownMods">Dropdown Modifyers</a>
              <ul>
                <li>i. <a href="#halfDropdowns">Half Dropdowns</a></li>
                <li>ii. <a href="#dropdownToLists">Dropdown Transformations</a>
                  <ul>
                    <li>I. <a href="#vertInlineBlockList">Verticle Lists</a></li>
                    <li>II. <a href="#halfWidthLists">Half Width Lists</a></li>
                    <li>II. <a href="#halfWidthDividerList">Half Width Divider Lists</a></li>
                    <li>II. <a href="#horizontalList">Horizontal Lists</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>5. <a href="#symbols">Symbols</a></li>
        <li>6. <a href="#gfol">GFOL Styles</a></li>
        <li>7. <a href="#examples">Complex Examples</a></li>


      </ul>
    <p></p>
      <br><hr><br>

      <!--- 1.  Buttons -->
      <article class="buttons">

  <section class="defaultButtons">
    <h2 id="buttons">1. Buttons</h2>
    Mobile: buttons are full width with a left and right margin of 2%<br>
    Desktop: Buttons are inline elements whose width is determined by the button copy.<br>

    <!-- button -->
    <p>
      </p><div class="CTAwrapper">
        <ul class="CTAmenu">
            <li class="CTAlist">
                <a class="CTAbutton" href="#linkhere">button 1</a>
            </li>
        </ul>
      </div>

      <!-- CODE-->
     <script src="https://gist.github.com/anonymous/75b5d8bbda828dac8d953b3653aac8a5.js"></script><link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css"><div id="gist43757075" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-html" class="file">


  <div itemprop="text" class="blob-wrapper data type-html ">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-html-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-html-LC1" class="blob-code blob-code-inner js-file-line">&lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAwrapper<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-html-LC2" class="blob-code blob-code-inner js-file-line">  &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAmenu<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-html-LC3" class="blob-code blob-code-inner js-file-line">      &lt;<span class="pl-ent">li</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAlist<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-html-LC4" class="blob-code blob-code-inner js-file-line">          &lt;<span class="pl-ent">a</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAbutton<span class="pl-pds">"</span></span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#linkhere<span class="pl-pds">"</span></span>&gt;button 1&lt;/<span class="pl-ent">a</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-html-LC5" class="blob-code blob-code-inner js-file-line">      &lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-html-LC6" class="blob-code blob-code-inner js-file-line">  &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-html-LC7" class="blob-code blob-code-inner js-file-line">&lt;/<span class="pl-ent">div</span>&gt;</td>
      </tr>
</tbody></table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/anonymous/75b5d8bbda828dac8d953b3653aac8a5/raw/8ebdf68dcd9cf496c2696a328c3d522d21969ae0/.html" style="float:right">view raw</a>
        <a href="https://gist.github.com/anonymous/75b5d8bbda828dac8d953b3653aac8a5#file-html">.html</a>
        hosted with ❤ by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>

    <p></p>

    <br>

     <!-- more than one button -->
    <p>
      To add another item, simply create another list item.<br>
      <!-- button -->
      </p><div class="CTAwrapper">
        <ul class="CTAmenu">
          <li class="CTAlist">
              <a class="CTAbutton" href="#linkhere">button 1</a>
          </li>
          <li class="CTAlist">
              <a class="CTAbutton" href="#linkhere">button 2</a>
          </li>
        </ul>
      </div>

        <!-- multiple buttons in a row -->
        <script src="https://gist.github.com/anonymous/b11d7c1362efa22246b60e960eb2d782.js"></script><link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css"><div id="gist43757085" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-html" class="file">


  <div itemprop="text" class="blob-wrapper data type-html ">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-html-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-html-LC1" class="blob-code blob-code-inner js-file-line">&lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAwrapper<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-html-LC2" class="blob-code blob-code-inner js-file-line">  &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAmenu<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-html-LC3" class="blob-code blob-code-inner js-file-line">    &lt;<span class="pl-ent">li</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAlist<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-html-LC4" class="blob-code blob-code-inner js-file-line">        &lt;<span class="pl-ent">a</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAbutton<span class="pl-pds">"</span></span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#linkhere<span class="pl-pds">"</span></span>&gt;button 1&lt;/<span class="pl-ent">a</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-html-LC5" class="blob-code blob-code-inner js-file-line">    &lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-html-LC6" class="blob-code blob-code-inner js-file-line">    &lt;<span class="pl-ent">li</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAlist<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-html-LC7" class="blob-code blob-code-inner js-file-line">        &lt;<span class="pl-ent">a</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAbutton<span class="pl-pds">"</span></span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#linkhere<span class="pl-pds">"</span></span>&gt;button 2&lt;/<span class="pl-ent">a</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-html-LC8" class="blob-code blob-code-inner js-file-line">    &lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-html-LC9" class="blob-code blob-code-inner js-file-line">  &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-html-LC10" class="blob-code blob-code-inner js-file-line">&lt;/<span class="pl-ent">div</span>&gt;</td>
      </tr>
</tbody></table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/anonymous/b11d7c1362efa22246b60e960eb2d782/raw/e3d7a90e1ac47eae9418b72e7d4069b2f361f451/.html" style="float:right">view raw</a>
        <a href="https://gist.github.com/anonymous/b11d7c1362efa22246b60e960eb2d782#file-html">.html</a>
        hosted with ❤ by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>



      <br><br><br> OR use a dropdown to list format <br><br><br>



      <div class="CTAwrapper">
          <ul class="CTAmenu">
              <li class="CTAlist" data-style="inline list">
                  <ul class="CTAdropdownList">
                  <li><a href="#link1">button 1</a></li>
                  <li><a href="#link2">button 2</a></li>
                  </ul>
              </li>
          </ul>
      </div>
      <!-- CODE-->
      <script src="https://gist.github.com/anonymous/b8c869c455574d3387f2e5671aba8a74.js"></script><link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css"><div id="gist43757089" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-html" class="file">


  <div itemprop="text" class="blob-wrapper data type-html ">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-html-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-html-LC1" class="blob-code blob-code-inner js-file-line">&lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAwrapper<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-html-LC2" class="blob-code blob-code-inner js-file-line">    &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAmenu<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-html-LC3" class="blob-code blob-code-inner js-file-line">        &lt;<span class="pl-ent">li</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAlist<span class="pl-pds">"</span></span> <span class="pl-e">data-style</span>=<span class="pl-s"><span class="pl-pds">"</span>inline list<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-html-LC4" class="blob-code blob-code-inner js-file-line">            &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAdropdownList<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-html-LC5" class="blob-code blob-code-inner js-file-line">            &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#link1<span class="pl-pds">"</span></span>&gt;button 1&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-html-LC6" class="blob-code blob-code-inner js-file-line">            &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#link2<span class="pl-pds">"</span></span>&gt;button 2&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-html-LC7" class="blob-code blob-code-inner js-file-line">            &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-html-LC8" class="blob-code blob-code-inner js-file-line">        &lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-html-LC9" class="blob-code blob-code-inner js-file-line">    &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-html-LC10" class="blob-code blob-code-inner js-file-line">&lt;/<span class="pl-ent">div</span>&gt;</td>
      </tr>
</tbody></table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/anonymous/b8c869c455574d3387f2e5671aba8a74/raw/f83586070a72bf5a6822d68e49982fb11ab18b90/.html" style="float:right">view raw</a>
        <a href="https://gist.github.com/anonymous/b8c869c455574d3387f2e5671aba8a74#file-html">.html</a>
        hosted with ❤ by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>

    <p></p>
  </section>
</article>

      <br><hr><br>


      <!--- 2.  dropdowns -->
      <article class="dropdowns">
  <section class="defaultButtons">
    <h2 id="dropdowns">2. Dropdowns</h2>
    Mobile: Dropdowns are stand alone horizontal bars. <br>
    Desktop: Dropdowns are inline elements whose width is determined by the longest word in the dropdown.<br>
    <br>
    *note: To absolute position the CTA, please add a new class to the CTAwrapper like: class="warpperCTA absPosClass". And use CSS to add rules to position that new class.
    <br><br>



    <p>
      <!-- dropdown -->
      </p><div class="CTAwrapper">
          <ul class="CTAmenu">
              <li class="CTAlist">
                  <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#linkhere" tabindex="-1">link 1</a></li>
                      <li><a href="#linkhere" tabindex="-1">here is link 2</a></li>
                      <li><a href="#linkhere" tabindex="-1">and link 3</a></li>
                  </ul>
              </li>
          </ul>
      </div>
      <script src="https://gist.github.com/anonymous/47bd1a4aa83fade2f46b464d0a3c7cf6.js"></script><link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css"><div id="gist40918970" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-html" class="file">


  <div itemprop="text" class="blob-wrapper data type-html ">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-html-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-html-LC1" class="blob-code blob-code-inner js-file-line">&lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>wrapperCTA<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-html-LC2" class="blob-code blob-code-inner js-file-line">      &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAmenu<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-html-LC3" class="blob-code blob-code-inner js-file-line">          &lt;<span class="pl-ent">li</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAlist<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-html-LC4" class="blob-code blob-code-inner js-file-line">              &lt;<span class="pl-ent">a</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAbutton<span class="pl-pds">"</span></span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>javascript:void(0)<span class="pl-pds">"</span></span>&gt;Dropdown &lt;<span class="pl-ent">span</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>plusMinus<span class="pl-pds">"</span></span>&gt;&lt;/<span class="pl-ent">span</span>&gt;&lt;/<span class="pl-ent">a</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-html-LC5" class="blob-code blob-code-inner js-file-line">              &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAdropdownList<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-html-LC6" class="blob-code blob-code-inner js-file-line">                  &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#linkhere<span class="pl-pds">"</span></span>&gt;link 1&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-html-LC7" class="blob-code blob-code-inner js-file-line">                  &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#linkhere<span class="pl-pds">"</span></span>&gt;here is link 2&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-html-LC8" class="blob-code blob-code-inner js-file-line">                  &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#linkhere<span class="pl-pds">"</span></span>&gt;and link 3&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-html-LC9" class="blob-code blob-code-inner js-file-line">              &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-html-LC10" class="blob-code blob-code-inner js-file-line">          &lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="file-html-LC11" class="blob-code blob-code-inner js-file-line">      &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="file-html-LC12" class="blob-code blob-code-inner js-file-line">  &lt;/<span class="pl-ent">div</span>&gt;</td>
      </tr>
</tbody></table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/anonymous/47bd1a4aa83fade2f46b464d0a3c7cf6/raw/78eb381fe75458ee4c2017c0ff5f3e94402621e5/.html" style="float:right">view raw</a>
        <a href="https://gist.github.com/anonymous/47bd1a4aa83fade2f46b464d0a3c7cf6#file-html">.html</a>
        hosted with ❤ by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>

    <p></p>
  </section>

  <br><br>

</article>

      <br><hr><br>



      <!-- 3. Colour Schemes -->
      <section class="sub colorSchemes">
    <h1 id="colorSchemes">3. Color Schemes</h1>
    For flexibility, we have separate data varialbles for font&amp;border color, background color, border style, and hover effects.
    <br><br>
    To customize a CTA, pick one attribute from each category. <br>
    If you leave a category blank, the default styling (marked as <i><strong>default</strong></i>) will be used. <br>

    <br><br>

    <section class="innerSub fontBorder" id="fontBorder">
        <h3>3a. Font &amp; Border Color:</h3>
        <ul>
          <li>data-color="gap blue"</li>
          <li>data-color="black" <i><strong>default</strong></i>
            <ul>
              <li>data-color-at-lg="black"*</li>
              <li>data-color-at-md="black"*</li>
            </ul></li>
          <li>data-color="white"
            <ul>
              <li>data-color-at-lg="white"*</li>
              <li>data-color-at-md="white"*</li>
            </ul>
          </li>
          <li>data-color="gfol blue" (#a6bccf)</li>
          <li>Seasonal: data-color="spring blue" (#0d4ca7)</li>
        </ul>



          <div class="CTAwrapper">
            <ul class="CTAmenu">
                <li class="CTAlist" data-color="gap blue">
                    <a class="CTAbutton" href="javascript:void(0)">gap blue <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1" tabindex="-1">link 1</a></li>
                        <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                        <li><a href="#link3" tabindex="-1">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="black">
                    <a class="CTAbutton" href="javascript:void(0)">black <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1" tabindex="-1">link 1</a></li>
                        <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                        <li><a href="#link3" tabindex="-1">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="white">
                    <a class="CTAbutton" href="javascript:void(0)">white <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1" tabindex="-1">link 1</a></li>
                        <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                        <li><a href="#link3" tabindex="-1">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="spring blue">
                    <a class="CTAbutton" href="javascript:void(0)">spring blue <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1" tabindex="-1">link 1</a></li>
                        <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                        <li><a href="#link3" tabindex="-1">and link 3</a></li>
                    </ul>
                </li>
            </ul>
          </div>

          Append the <i>data-</i> modifyers to <i>class="CTAlist"</i>.
          <div><div id="highlighter_278719" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-color=</code><code class="js string">"gap blue"</code></div></div></td></tr></tbody></table></div></div>

          * The black and white font/border color have their own mobile and desktop data attributes that can be used together like:
        <div><div id="highlighter_668528" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-color-at-lg=</code><code class="js string">"black"</code> <code class="js plain">data-color-at-md=</code><code class="js string">"white"</code> <code class="js plain">data-background=</code><code class="js string">"translucent black"</code></div></div></td></tr></tbody></table></div></div>
    </section>


        <br><br>

    <section class="innerSub backgroundColor" id="backgroundColor">
        <h3>3b. Background color: </h3>
        <ul>
          <li>data-background="gap blue"</li>
          <li>data-background="black"</li>
          <li>data-background="white"</li>
          <li>data-background="translucent black" (40% opacity)</li>
          <li>data-background="translucent white" (50% opacity)</li>
          <li>(transparent) <i><strong>default</strong></i></li>
          <li>data-background="gfol blue" (#a6bccf)</li>
          <li>Seasonal: data-background="spring blue" (#0d4ca7)</li>
        </ul>

        <div class="CTAwrapper">
            <ul class="CTAmenu">
              <li class="CTAlist" data-color="white" data-background="gap blue">
                  <a class="CTAbutton" href="javascript:void(0)">white/gap blue bg <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1" tabindex="-1">link 1</a></li>
                      <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                      <li><a href="#link3" tabindex="-1">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-color="white" data-background="black">
                  <a class="CTAbutton" href="javascript:void(0)">white/black bg <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1" tabindex="-1">link 1</a></li>
                      <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                      <li><a href="#link3" tabindex="-1">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-color="gap blue" data-background="white">
                  <a class="CTAbutton" href="javascript:void(0)">gap blue/white bg <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1" tabindex="-1">link 1</a></li>
                      <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                      <li><a href="#link3" tabindex="-1">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-color="white" data-background="translucent black">
                <a class="CTAbutton" href="javascript:void(0)">white/40% black bg <span class="plusMinus"></span></a>
                <ul class="CTAdropdownList">
                    <li><a href="#link1" tabindex="-1">link 1</a></li>
                    <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                    <li><a href="#link3" tabindex="-1">and link 3</a></li>
                </ul>
              </li>
              <li class="CTAlist" data-color="black" data-background="translucent white">
                  <a class="CTAbutton" href="javascript:void(0)">black/50% white bg <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1" tabindex="-1">link 1</a></li>
                      <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                      <li><a href="#link3" tabindex="-1">and link 3</a></li>
                  </ul>
              </li><br>
              <li class="CTAlist">
                  <a class="CTAbutton" href="javascript:void(0)">transparent <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1" tabindex="-1">link 1</a></li>
                      <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                      <li><a href="#link3" tabindex="-1">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-color="spring blue">
                  <a class="CTAbutton" href="javascript:void(0)">spring blue <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1" tabindex="-1">link 1</a></li>
                      <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                      <li><a href="#link3" tabindex="-1">and link 3</a></li>
                  </ul>
              </li>
            </ul>
          </div>

          Append the <i>data-</i> modifyers to <i>class="CTAlist"</i>.
          <div><div id="highlighter_571591" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-color=</code><code class="js string">"white"</code> <code class="js plain">data-background=</code><code class="js string">"gap blue"</code></div></div></td></tr></tbody></table></div></div>
      </section>



        <br><br>


      <section class="innerSub borderStyle" id="borderStyle">
        <h3>3c. Border Style: </h3>
        <ul>
          <li>(with border) <i><strong>default</strong></i></li>
          <li>data-border="none" (no border) </li>
        </ul>

        <div class="CTAwrapper">
            <ul class="CTAmenu">
              <li class="CTAlist">
                  <a class="CTAbutton" href="javascript:void(0)">with border <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1" tabindex="-1">link 1</a></li>
                      <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                      <li><a href="#link3" tabindex="-1">and link 3</a></li>
                  </ul>
              </li>
              <li class="CTAlist" data-border="none">
                  <a class="CTAbutton" href="javascript:void(0)">without border <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1" tabindex="-1">link 1</a></li>
                      <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                      <li><a href="#link3" tabindex="-1">and link 3</a></li>
                  </ul>
              </li>
            </ul>
        </div>

        Append the <i>data-</i> modifyers to <i>class="CTAlist"</i>.
        <div><div id="highlighter_621743" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-border=</code><code class="js string">"none"</code></div></div></td></tr></tbody></table></div></div>
      </section>

        <br><br>

      <section class="innerSub hoverEffects" id="hoverEffects">
        <h3>3d. Hover Effects: </h3>
        <ul>
          <li>(none) <i><strong>default</strong></i></li>
          <li>data-hover="gap blue inverse" (gap blue text, white background &amp; border)</li>
          <li>data-hover="black inverse" (black text, white background &amp; border)</li>
          <li>data-hover="white inverse" (white text, black background &amp; border)</li>
          <li>data-hover="translucent black" (40% opacity)</li>
          <li>data-hover="translucent white" (50% opacity)</li>
          <li>data-hover="gfol blue" (gfol blue #a6bccf text, white background)</li>
          <li>data-hover="gfol blue inverse" (white text, gfol blue #a6bccf background)</li>
          <li>Seasonal: data-hover="spring blue"</li>
        </ul>


         <div class="CTAwrapper">
              <ul class="CTAmenu">
                <li class="CTAlist">
                    <a class="CTAbutton" href="javascript:void(0)">none <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1" tabindex="-1">link 1</a></li>
                        <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                        <li><a href="#link3" tabindex="-1">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="white" data-background="gap blue" data-hover="gap blue inverse">
                    <a class="CTAbutton" href="javascript:void(0)">gap blue inverse<span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1" tabindex="-1">link 1</a></li>
                        <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                        <li><a href="#link3" tabindex="-1">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="white" data-background="black" data-hover="black inverse">
                    <a class="CTAbutton" href="javascript:void(0)">black inverse <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1" tabindex="-1">link 1</a></li>
                        <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                        <li><a href="#link3" tabindex="-1">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="gap blue" data-background="white" data-hover="white inverse">
                    <a class="CTAbutton" href="javascript:void(0)">white inverse <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1" tabindex="-1">link 1</a></li>
                        <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                        <li><a href="#link3" tabindex="-1">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="white" data-hover="translucent black">
                  <a class="CTAbutton" href="javascript:void(0)">translucent black <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                      <li><a href="#link1" tabindex="-1">link 1</a></li>
                      <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                      <li><a href="#link3" tabindex="-1">and link 3</a></li>
                  </ul>
                </li>
                <li class="CTAlist" data-color="black" data-hover="translucent white">
                    <a class="CTAbutton" href="javascript:void(0)">translucent white <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1" tabindex="-1">link 1</a></li>
                        <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                        <li><a href="#link3" tabindex="-1">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist" data-color="white" data-hover="spring blue inverse">
                    <a class="CTAbutton" href="javascript:void(0)">spring blue inverse <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#link1" tabindex="-1">link 1</a></li>
                        <li><a href="#link2" tabindex="-1">here is link 2</a></li>
                        <li><a href="#link3" tabindex="-1">and link 3</a></li>
                    </ul>
                </li>
              </ul>
            </div>

            Append the <i>data-</i> modifyers to <i>class="CTAlist"</i>.
            <div><div id="highlighter_266154" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-color=</code><code class="js string">"white"</code> <code class="js plain">data-background=</code><code class="js string">"gap blue"</code> <code class="js plain">data-hover=</code><code class="js string">"gap blue inverse"</code></div></div></td></tr></tbody></table></div></div>

        </section>



        <br><br>

       <section class="innerSub fontSizes">
        <h3>3e. Font Sizes: </h3>
        <ul>
          <li>data-font="80" (roughly 11.2px)</li>
          <li>data-font="90" (roughly 12.5px)</li>
          <li>data-font="100" (roughly 14px) <i><strong>default</strong></i></li>
          <li>data-font="110" (roughly 16px)</li>
          <li>data-font="120" (roughly 18px)</li>
        </ul>

             <!--buttons-->
            <div class="CTAwrapper" data-font="80">
                <ul class="CTAmenu">
                    <li class="CTAlist" data-color="black">
                        <a class="CTAbutton" href="javascript:void(0)">80%</a>
                    </li>
                </ul>
            </div>

            <div class="CTAwrapper" data-font="90">
                <ul class="CTAmenu">
                    <li class="CTAlist" data-color="black">
                        <a class="CTAbutton" href="javascript:void(0)">90%</a>
                    </li>
                </ul>
            </div>

            <div class="CTAwrapper" data-font="100">
                <ul class="CTAmenu">
                    <li class="CTAlist" data-color="black">
                        <a class="CTAbutton" href="javascript:void(0)">100%</a>
                    </li>
                </ul>
            </div>

            <div class="CTAwrapper" data-font="110">
                <ul class="CTAmenu">
                    <li class="CTAlist" data-color="black">
                        <a class="CTAbutton" href="javascript:void(0)">110%</a>
                    </li>
                </ul>
            </div>

            <div class="CTAwrapper" data-font="120">
                <ul class="CTAmenu">
                    <li class="CTAlist" data-color="black">
                        <a class="CTAbutton" href="javascript:void(0)">120%</a>
                    </li>
                </ul>
            </div>

            Append the <i>data-</i> modifyers to <i>class="CTAwrapper"</i>.
            <div><div id="highlighter_695446" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">class=</code><code class="js string">"CTAwrapper"</code> <code class="js plain">data-font=</code><code class="js string">"120"</code></div></div></td></tr></tbody></table></div></div>

    </section>

</section>


      <br><hr><br>


      <!-- 4. Modifyers-->
      <h1 id="modifyers">4. Modifyers</h1>
          <!-- 4a. Buttn Modifyers-->
          <!--  -->

          <!-- <br><hr><br> -->

          <!-- 4ba. Dropdown Modifyers -->


  <section class="sub dropdownModifyers">

    <h1 id="dropDownMods">4b. Dropdown Modifyers</h1>

    <!--- 2a.i.  half Dropdowns -->
    <div class="innerSub halfDropdowns">
      <h3 id="halfDropdowns">4b.i. Mobile Half Dropdowns</h3>
      Use: <b>data-size="half dropdown"</b><br>
      Append the <i>data-</i> modifyers to <i>class="CTAmenu"</i>.

      <br>
      <p>
        <!-- dropdown -->
        </p><div class="CTAwrapper">
            <ul class="CTAmenu" data-size="half dropdown">
                <li class="CTAlist">
                    <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#linkhere" tabindex="-1">link 1</a></li>
                        <li><a href="#linkhere" tabindex="-1">here is link 2</a></li>
                        <li><a href="#linkhere" tabindex="-1">and link 3</a></li>
                    </ul>
                </li>
                <li class="CTAlist">
                    <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                    <ul class="CTAdropdownList">
                        <li><a href="#linkhere" tabindex="-1">link 1</a></li>
                        <li><a href="#linkhere" tabindex="-1">here is link 2</a></li>
                        <li><a href="#linkhere" tabindex="-1">and link 3</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <script src="https://gist.github.com/anonymous/679ece03695ea05d8ef4170a282fb1ae.js"></script><link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css"><div id="gist41048207" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-html" class="file">


  <div itemprop="text" class="blob-wrapper data type-html ">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-html-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-html-LC1" class="blob-code blob-code-inner js-file-line">&lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>wrapperCTA<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-html-LC2" class="blob-code blob-code-inner js-file-line">    &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAmenu<span class="pl-pds">"</span></span> <span class="pl-e">data-size</span>=<span class="pl-s"><span class="pl-pds">"</span>half dropdown<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-html-LC3" class="blob-code blob-code-inner js-file-line">        &lt;<span class="pl-ent">li</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAlist<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-html-LC4" class="blob-code blob-code-inner js-file-line">            &lt;<span class="pl-ent">a</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAbutton<span class="pl-pds">"</span></span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>javascript:void(0)<span class="pl-pds">"</span></span>&gt;Dropdown &lt;<span class="pl-ent">span</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>plusMinus<span class="pl-pds">"</span></span>&gt;&lt;/<span class="pl-ent">span</span>&gt;&lt;/<span class="pl-ent">a</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-html-LC5" class="blob-code blob-code-inner js-file-line">            &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAdropdownList<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-html-LC6" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#linkhere<span class="pl-pds">"</span></span>&gt;link 1&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-html-LC7" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#linkhere<span class="pl-pds">"</span></span>&gt;here is link 2&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-html-LC8" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#linkhere<span class="pl-pds">"</span></span>&gt;and link 3&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-html-LC9" class="blob-code blob-code-inner js-file-line">            &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-html-LC10" class="blob-code blob-code-inner js-file-line">        &lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="file-html-LC11" class="blob-code blob-code-inner js-file-line">    &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="file-html-LC12" class="blob-code blob-code-inner js-file-line">
</td>
      </tr>
      <tr>
        <td id="file-html-L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="file-html-LC13" class="blob-code blob-code-inner js-file-line">    &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAmenu<span class="pl-pds">"</span></span> <span class="pl-e">data-size</span>=<span class="pl-s"><span class="pl-pds">"</span>half dropdown<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="file-html-LC14" class="blob-code blob-code-inner js-file-line">        &lt;<span class="pl-ent">li</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAlist<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="file-html-LC15" class="blob-code blob-code-inner js-file-line">            &lt;<span class="pl-ent">a</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAbutton<span class="pl-pds">"</span></span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>javascript:void(0)<span class="pl-pds">"</span></span>&gt;Dropdown &lt;<span class="pl-ent">span</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>plusMinus<span class="pl-pds">"</span></span>&gt;&lt;/<span class="pl-ent">span</span>&gt;&lt;/<span class="pl-ent">a</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="file-html-LC16" class="blob-code blob-code-inner js-file-line">            &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAdropdownList<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="file-html-LC17" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#linkhere<span class="pl-pds">"</span></span>&gt;link 1&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="file-html-LC18" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#linkhere<span class="pl-pds">"</span></span>&gt;here is link 2&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="file-html-LC19" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#linkhere<span class="pl-pds">"</span></span>&gt;and link 3&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="file-html-LC20" class="blob-code blob-code-inner js-file-line">            &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="file-html-LC21" class="blob-code blob-code-inner js-file-line">        &lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="file-html-LC22" class="blob-code blob-code-inner js-file-line">    &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="file-html-LC23" class="blob-code blob-code-inner js-file-line">&lt;/<span class="pl-ent">div</span>&gt;</td>
      </tr>
</tbody></table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/anonymous/679ece03695ea05d8ef4170a282fb1ae/raw/a55b0c014558cb6d9fe4d207e841cf86bbbd1ed1/.html" style="float:right">view raw</a>
        <a href="https://gist.github.com/anonymous/679ece03695ea05d8ef4170a282fb1ae#file-html">.html</a>
        hosted with ❤ by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>

      <p></p>
    </div>
  </section>

          <!-- 5a. Dropdown to List -->
          <p>
  </p><section class="sub dropdownModifyers">

    <div class="innerSub dropdownToLists" id="dropdownToLists">
      <!-- <h2 id="listStyles">5a. Verticle List styles</h2> -->

      <!-- 5a.i vertiable block list -->
  <!--     <p>
        <h3 id="vertList">5a.i. Vertical List of Equal Widths</h3><br>
        Also available: <b>data-style-at-lg="list"</b> and <b>data-style-at-md="list"</b><br>

        <div class="CTAwrapper">
            <ul class="CTAmenu">
                <li class="CTAlist" data-color="white" data-style="list">
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">link 2</a></li>
                        <li><a href="#link3">link 3</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <script src="https://gist.github.com/anonymous/7af4cb4ff2ec1f1af0da6894f4006ce6.js"></script>
      </p>

    <br><br> -->

      <!-- 5a.ii Verticle List of Varying Widths -->
    <h2 id="vertInlineBlockList">4b.ii. Dropdown Transformations</h2><br>
    <p>

    </p><div class="innerSub verticleLists">
      <h3 id="vertInlineBlockList">I. Verticle List</h3>


      Use: <b>data-list-style="inline-block"</b><br>
      Also available: <b>data-list-style-at-md="inline-block"</b>, <b>data-list-style-at-lg="inline-block"</b><br>
      Append the <i>data-</i> modifyers to <i>class="CTAlist"</i><br>



      <div class="CTAwrapper">
          <ul class="CTAmenu">
              <li class="CTAlist" data-color="black" data-style="list" data-list-style="inline-block">
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link 1</a></li>
                      <li><a href="#link2">link 2 here</a></li>
                      <li><a href="#link3">and this is link 3</a></li>
                  </ul>
              </li>
          </ul>
      </div>

      <script src="https://gist.github.com/anonymous/c7b200c3bd4ed250e0de478ef2307773.js"></script><link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css"><div id="gist41048445" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-html" class="file">


  <div itemprop="text" class="blob-wrapper data type-html ">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-html-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-html-LC1" class="blob-code blob-code-inner js-file-line">&lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>wrapperCTA<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-html-LC2" class="blob-code blob-code-inner js-file-line">    &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAmenu<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-html-LC3" class="blob-code blob-code-inner js-file-line">        &lt;<span class="pl-ent">li</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAlist<span class="pl-pds">"</span></span> <span class="pl-e">data-color</span>=<span class="pl-s"><span class="pl-pds">"</span>black<span class="pl-pds">"</span></span> <span class="pl-e">data-style</span>=<span class="pl-s"><span class="pl-pds">"</span>list<span class="pl-pds">"</span></span> <span class="pl-e">data-list-style</span>=<span class="pl-s"><span class="pl-pds">"</span>inline-block<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-html-LC4" class="blob-code blob-code-inner js-file-line">            &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAdropdownList<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-html-LC5" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#link1<span class="pl-pds">"</span></span>&gt;link 1&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-html-LC6" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#link2<span class="pl-pds">"</span></span>&gt;link 2&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-html-LC7" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#link3<span class="pl-pds">"</span></span>&gt;link 3&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-html-LC8" class="blob-code blob-code-inner js-file-line">            &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-html-LC9" class="blob-code blob-code-inner js-file-line">        &lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-html-LC10" class="blob-code blob-code-inner js-file-line">    &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="file-html-LC11" class="blob-code blob-code-inner js-file-line">&lt;/<span class="pl-ent">div</span>&gt;</td>
      </tr>
</tbody></table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/anonymous/c7b200c3bd4ed250e0de478ef2307773/raw/936989713d8280d050e29ae7f355ee2108487716/.html" style="float:right">view raw</a>
        <a href="https://gist.github.com/anonymous/c7b200c3bd4ed250e0de478ef2307773#file-html">.html</a>
        hosted with ❤ by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>


      <br><br>

                <!-- <p>
                  <div class="innerSub verticleListsNoBorder">
                    <h3 id="vertTextList">I.B. Vertical Text List (no borders) </h3>
                    Also available: <b>data-border-at-lg="none"</b>, <b>data-border-at-md="none"</b><br><br>


                    <div class="CTAwrapper">
                          <ul class="CTAmenu">
                              <li class="CTAlist" data-color="black" data-style="list" data-border="none">
                                  <ul class="CTAdropdownList">
                                      <li><a href="#link1">link 1</a></li>
                                      <li><a href="#link2">link 2</a></li>
                                      <li><a href="#link3">link 3</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>

                    <script src="https://gist.github.com/anonymous/64fd42f360e9d27f6bab71dff69244fe.js"></script>
                    </div>
                  </p> -->
        </div>
      <br><br>

      <!-- 5b. Half Width Lists -->
      <p>
      </p><div class="innerSub halfLists">
        <h3 id="halfWidthLists">II. Half Width Lists</h3>
        Pair <b>data-size="half"</b> with <b>data-style="list"</b>. <br>
        Also available: <b>data-size-at-lg="half"</b>, <b>data-size-at-md="half"</b>, <b>data-style-at-lg="list"</b>, <b>data-style-at-md="list"</b><br>
        Append the <i>data-</i> modifyers to <i>class="CTAlist"</i><br><br>


        <!--dropdown -->
        <div class="CTAwrapper">
            <ul class="CTAmenu" data-size="half">
                <li class="CTAlist" data-color="white" data-style="list">
                    <ul class="CTAdropdownList">
                        <li><a href="#link1">link 1</a></li>
                        <li><a href="#link2">link 2</a></li>
                        <li><a href="#link3">link 3</a></li>
                        <li><a href="#link3">link 4</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <script src="https://gist.github.com/anonymous/982f080a632ced8347d6eb2869d89aec.js"></script><link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css"><div id="gist41048484" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-html" class="file">


  <div itemprop="text" class="blob-wrapper data type-html ">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-html-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-html-LC1" class="blob-code blob-code-inner js-file-line">&lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>wrapperCTA<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-html-LC2" class="blob-code blob-code-inner js-file-line">    &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAmenu<span class="pl-pds">"</span></span> <span class="pl-e">data-size</span>=<span class="pl-s"><span class="pl-pds">"</span>half<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-html-LC3" class="blob-code blob-code-inner js-file-line">        &lt;<span class="pl-ent">li</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAlist<span class="pl-pds">"</span></span> <span class="pl-e">data-color</span>=<span class="pl-s"><span class="pl-pds">"</span>white<span class="pl-pds">"</span></span> <span class="pl-e">data-style</span>=<span class="pl-s"><span class="pl-pds">"</span>list<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-html-LC4" class="blob-code blob-code-inner js-file-line">            &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAdropdownList<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-html-LC5" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#link1<span class="pl-pds">"</span></span>&gt;link 1&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-html-LC6" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#link2<span class="pl-pds">"</span></span>&gt;link 2&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-html-LC7" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#link3<span class="pl-pds">"</span></span>&gt;link 3&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-html-LC8" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#link3<span class="pl-pds">"</span></span>&gt;link 4&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-html-LC9" class="blob-code blob-code-inner js-file-line">            &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-html-LC10" class="blob-code blob-code-inner js-file-line">        &lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="file-html-LC11" class="blob-code blob-code-inner js-file-line">    &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="file-html-LC12" class="blob-code blob-code-inner js-file-line">&lt;/<span class="pl-ent">div</span>&gt;</td>
      </tr>
</tbody></table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/anonymous/982f080a632ced8347d6eb2869d89aec/raw/d1b4f8663705c7f6626dfd489208c29d537feb56/.html" style="float:right">view raw</a>
        <a href="https://gist.github.com/anonymous/982f080a632ced8347d6eb2869d89aec#file-html">.html</a>
        hosted with ❤ by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>



          <br><br>


          <!-- 5b.ii Half Width Text Lists (no borders) -->
          <!-- <p>
          <div class="innerSub halfTextList">
            <h3 id="halfWidthTextList">II.B. Half Width Text Lists (no borders)</h3>
            Pair <b>data-size="half"</b> with <b>data-style="list"</b> and <b>data-border="none"</b>. <br>
            Also available: <b>data-size-at-lg="half"</b>, <b>data-size-at-md="half"</b>, <b>data-style-at-lg="list"</b>, <b>data-style-at-md="list"</b>, <b>data-border-at-lg="none"</b>, <b>data-border-at-md="none"</b><br><br>


            <div class="CTAwrapper">
                <ul class="CTAmenu" data-size="half">
                    <li class="CTAlist" data-color="black" data-style="list" data-border="none" data-hover="none">
                        <ul class="CTAdropdownList">
                            <li><a href="#link1">link 1</a></li>
                            <li><a href="#link2">link 2</a></li>
                            <li><a href="#link3">link 3</a></li>
                            <li><a href="#link4">link 4</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <script src="https://gist.github.com/anonymous/0128dff76d5c57a0789786491994a1ec.js"></script>
          </div>
          </p> -->
    </div>
    <p></p>


    <br><br>


    <!--5b.iii Half Width Lists with Top & Bottom Border Separators-->
    <!-- <p>
    <div class="innerSub dividerList">
      <h3 id="halfWidthDividerList">III. Half Width Lists with Divider Separators</h3>
      Pair <b>data-style="list"</b> with <b>data-border="dividers"</b><br>
      Also Available: <b>data-border-at-lg="dividers"</b>, <b>data-border-at-md="dividers"</b><br>
      Append the <i>data-size</i> modifyers to <i>class="CTAmenu"</i> and the <i>data-border</i> to <i>class="CTAlist"</i><br><br>

      <br><br>
      <div class="CTAwrapper">
        <ul class="CTAmenu" data-size="half">
            <li class="CTAlist" data-color="black" data-style="list" data-border="dividers" data-hover="none">
              <ul class="CTAdropdownList">
                  <li><a href="#link1">link 1</a></li>
                  <li><a href="#link2">link 2</a></li>
                  <li><a href="#link3">link 3</a></li>
                  <li><a href="#link4">link 4</a></li>
              </ul>
            </li>
        </ul>
      </div>

      <script src="https://gist.github.com/anonymous/e3031a3f222d9648804c77003895e998.js"></script>
      </div>
    </p>



    <br><br> -->

    <!-- 5c. 5a. Horitzontal Lists -->
    <p>
      </p><div class="innerSub horizontalList" id="horizontalList">
        <h3>IV. Horizontal List</h3>
        Use <b>data-style="inline list"</b><br>
        Also available: <b>data-style-at-lg="inline list"</b>, <b>data-style-at-md="inline list"</b><br>
        Append the <i>data-</i> modifyers to <i>class="CTAlist"</i><br><br>

        <div class="CTAwrapper">
            <ul class="CTAmenu">
                <li class="CTAlist" data-color="black" data-style="inline list">
                    <ul class="CTAdropdownList">
                    <li><a href="#link1">link1</a></li>
                    <li><a href="#link2">link2</a></li>
                    <li><a href="#link3">link4</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <script src="https://gist.github.com/anonymous/015136546692b1a13c87f7bee6046036.js"></script><link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css"><div id="gist40919578" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-gistfile1-txt" class="file">


  <div itemprop="text" class="blob-wrapper data type-text ">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-gistfile1-txt-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-gistfile1-txt-LC1" class="blob-code blob-code-inner js-file-line">&lt;div class="wrapperCTA"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-gistfile1-txt-LC2" class="blob-code blob-code-inner js-file-line">    &lt;ul class="CTAmenu"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-gistfile1-txt-LC3" class="blob-code blob-code-inner js-file-line">        &lt;li class="CTAlist" data-color="black" data-style="inline list"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-gistfile1-txt-LC4" class="blob-code blob-code-inner js-file-line">            &lt;ul class="CTAdropdownList"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-gistfile1-txt-LC5" class="blob-code blob-code-inner js-file-line">            &lt;li&gt;&lt;a href="#link1"&gt;link1&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-gistfile1-txt-LC6" class="blob-code blob-code-inner js-file-line">            &lt;li&gt;&lt;a href="#link2"&gt;link2&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-gistfile1-txt-LC7" class="blob-code blob-code-inner js-file-line">            &lt;li&gt;&lt;a href="#link3"&gt;link4&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-gistfile1-txt-LC8" class="blob-code blob-code-inner js-file-line">            &lt;/ul&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-gistfile1-txt-LC9" class="blob-code blob-code-inner js-file-line">        &lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-gistfile1-txt-LC10" class="blob-code blob-code-inner js-file-line">    &lt;/ul&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="file-gistfile1-txt-LC11" class="blob-code blob-code-inner js-file-line">&lt;/div&gt;</td>
      </tr>
</tbody></table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/anonymous/015136546692b1a13c87f7bee6046036/raw/304c60e714189182292af9797296e330aff25a89/gistfile1.txt" style="float:right">view raw</a>
        <a href="https://gist.github.com/anonymous/015136546692b1a13c87f7bee6046036#file-gistfile1-txt">gistfile1.txt</a>
        hosted with ❤ by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>


            <!-- ii. Horitzontal Text Lists (no borders) -->
            <!-- p>
              <div class="innerSub inlineTextList">
              <h3 id="inlineTextList">VI. Horitzontal Text Lists (no borders) </h3>
              Pair <b>data-style="inline list"</b> with <b>data-border="none"</b><br>
              Also available: <b>data-style-at-lg="inline list"</b>, <b>data-style-at-md="inline list"</b>, <b>data-border-at-lg="none"</b>, <b>data-border-at-md="none"</b><br><br>

              <div class="CTAwrapper">
                <ul class="CTAmenu">
                  <li class="CTAlist" data-color="gap blue" data-style="inline list" data-border="none" data-hover="none">
                      <ul class="CTAdropdownList">
                          <li><a href="#link1">link1</a></li>
                          <li><a href="#link2">link2</a></li>
                          <li><a href="#link3">link4</a></li>
                      </ul>
                  </li>
                </ul>
              </div>

              <script src="https://gist.github.com/anonymous/d1c5bb5434f8cab488f90720adbd0501.js"></script>
            </div>
          </p> -->


        </div>
      <p></p>

      <!-- 5c. 5a. verticle Lists -->
        <p>

          </p><div class="innerSub horizontalList" id="horizontalList">
            <h3 id="vertList">V. Vertical List </h3><br>
            Also available: <b>data-style-at-lg="list"</b> and <b>data-style-at-md="list"</b><br>

            <div class="CTAwrapper">
                <ul class="CTAmenu">
                    <li class="CTAlist" data-style="list">
                        <ul class="CTAdropdownList">
                            <li><a href="#link1">link 1</a></li>
                            <li><a href="#link2">link 2</a></li>
                            <li><a href="#link3">link 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <script src="https://gist.github.com/anonymous/7af4cb4ff2ec1f1af0da6894f4006ce6.js"></script><link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css"><div id="gist41048420" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-html" class="file">


  <div itemprop="text" class="blob-wrapper data type-html ">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-html-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-html-LC1" class="blob-code blob-code-inner js-file-line">&lt;<span class="pl-ent">div</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>wrapperCTA<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-html-LC2" class="blob-code blob-code-inner js-file-line">    &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAmenu<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-html-LC3" class="blob-code blob-code-inner js-file-line">        &lt;<span class="pl-ent">li</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAlist<span class="pl-pds">"</span></span> <span class="pl-e">data-color</span>=<span class="pl-s"><span class="pl-pds">"</span>white<span class="pl-pds">"</span></span> <span class="pl-e">data-style</span>=<span class="pl-s"><span class="pl-pds">"</span>list<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-html-LC4" class="blob-code blob-code-inner js-file-line">            &lt;<span class="pl-ent">ul</span> <span class="pl-e">class</span>=<span class="pl-s"><span class="pl-pds">"</span>CTAdropdownList<span class="pl-pds">"</span></span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-html-LC5" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#link1<span class="pl-pds">"</span></span>&gt;link 1&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-html-LC6" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#link2<span class="pl-pds">"</span></span>&gt;link 2&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-html-LC7" class="blob-code blob-code-inner js-file-line">                &lt;<span class="pl-ent">li</span>&gt;&lt;<span class="pl-ent">a</span> <span class="pl-e">href</span>=<span class="pl-s"><span class="pl-pds">"</span>#link3<span class="pl-pds">"</span></span>&gt;link 3&lt;/<span class="pl-ent">a</span>&gt;&lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-html-LC8" class="blob-code blob-code-inner js-file-line">            &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-html-LC9" class="blob-code blob-code-inner js-file-line">        &lt;/<span class="pl-ent">li</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-html-LC10" class="blob-code blob-code-inner js-file-line">    &lt;/<span class="pl-ent">ul</span>&gt;</td>
      </tr>
      <tr>
        <td id="file-html-L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="file-html-LC11" class="blob-code blob-code-inner js-file-line">&lt;/<span class="pl-ent">div</span>&gt;</td>
      </tr>
</tbody></table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/anonymous/7af4cb4ff2ec1f1af0da6894f4006ce6/raw/66c7be82d5c589323238ba7acffe2be4a77821eb/.html" style="float:right">view raw</a>
        <a href="https://gist.github.com/anonymous/7af4cb4ff2ec1f1af0da6894f4006ce6#file-html">.html</a>
        hosted with ❤ by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>

          </div>
      <p></p>
</div></section>
<p></p>
<br><br>

      <br><hr><br>

      <!--5. Symols -->
      <p>
    </p><h2 id="symbols">5. Symbols</h2>
    Caret: <span class="caret"></span><br>
    <div><div id="highlighter_956365" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">&lt;span class=</code><code class="js string">"caret"</code><code class="js plain">&gt;&lt;/span&gt;</code></div></div></td></tr></tbody></table></div></div>
    Plus Minus: <a><span class="plusMinus"></span></a><br>
    <div><div id="highlighter_700097" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">&lt;span class=</code><code class="js string">"plusMinus"</code><code class="js plain">&gt;&lt;/span&gt;</code></div></div></td></tr></tbody></table></div></div>
    Pipe: <span class="pipe"></span><br>
    <div><div id="highlighter_882787" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">&lt;span class=</code><code class="js string">"pipe"</code><code class="js plain">&gt;&lt;/span&gt;</code></div></div></td></tr></tbody></table></div></div>
<p></p>


<section class="sub pipes">
    <br><br>
    <!--ii. Horitzontal Text with Pipe Separators-->
    <p>
      </p><h3 id="inlinePipeList">Pipe Separators</h3>
       Add <b>data-pipes="true"</b><br>
      Also available: <b>data-pipes-at-lg="true"</b>, <b>data-pipes-at-md="true"</b><br><br>


      <!--dropdown-->
      <div class="CTAwrapper">
          <ul class="CTAmenu">
              <li class="CTAlist" data-color="black" data-pipes="true" data-style="inline list" data-border="none" data-hover="none">
                  <ul class="CTAdropdownList">
                  <li><a href="#link1">link1</a></li>
                  <li><a href="#link2">link2</a></li>
                  <li><a href="#link3">link4</a></li>
                  </ul>
              </li>
          </ul>
      </div>

      <script src="https://gist.github.com/anonymous/f26b851ef54ea325ca4b98bce3408f37.js"></script><link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css"><div id="gist40919588" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-gistfile1-txt" class="file">


  <div itemprop="text" class="blob-wrapper data type-text ">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-gistfile1-txt-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-gistfile1-txt-LC1" class="blob-code blob-code-inner js-file-line">&lt;div class="wrapperCTA"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-gistfile1-txt-LC2" class="blob-code blob-code-inner js-file-line">    &lt;ul class="CTAmenu"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-gistfile1-txt-LC3" class="blob-code blob-code-inner js-file-line">        &lt;li class="CTAlist" data-color="black" data-pipes="true" data-style="inline list" data-border="none" data-hover="none"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-gistfile1-txt-LC4" class="blob-code blob-code-inner js-file-line">            &lt;ul class="CTAdropdownList"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-gistfile1-txt-LC5" class="blob-code blob-code-inner js-file-line">                &lt;li&gt;&lt;a href="#link1"&gt;link1&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-gistfile1-txt-LC6" class="blob-code blob-code-inner js-file-line">                &lt;li&gt;&lt;a href="#link2"&gt;link2&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-gistfile1-txt-LC7" class="blob-code blob-code-inner js-file-line">                &lt;li&gt;&lt;a href="#link3"&gt;link4&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-gistfile1-txt-LC8" class="blob-code blob-code-inner js-file-line">            &lt;/ul&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-gistfile1-txt-LC9" class="blob-code blob-code-inner js-file-line">        &lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-gistfile1-txt-LC10" class="blob-code blob-code-inner js-file-line">    &lt;/ul&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="file-gistfile1-txt-LC11" class="blob-code blob-code-inner js-file-line">&lt;/div&gt;</td>
      </tr>
</tbody></table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/anonymous/f26b851ef54ea325ca4b98bce3408f37/raw/e38cc38c074244fbfa287384f444feab3655bd4a/gistfile1.txt" style="float:right">view raw</a>
        <a href="https://gist.github.com/anonymous/f26b851ef54ea325ca4b98bce3408f37#file-gistfile1-txt">gistfile1.txt</a>
        hosted with ❤ by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>

    <p></p>


    <br><br>
    <p>
      </p><h3>Manually added pipe separators</h3>
      <xmp><span class="pipe"></span></xmp>
      Also avaialble: <b>class="pipe-at-md"</b> and <b>class="pipe-at-lg"</b>

      <br><br>
      <!--dropdown-->
      <div class="CTAwrapper">
          <ul class="CTAmenu">
              <li class="CTAlist" data-color="black" data-style="inline list" data-border="none" data-hover="none">
                  <ul class="CTAdropdownList">
                      <li><a href="#link1">link1</a></li>
                      <li><span class="pipe"></span><a href="#link2">link2</a></li>
                      <li><span class="pipe"></span><a href="#link3">link4</a></li>
                  </ul>
              </li>
          </ul>
      </div>

      <script src="https://gist.github.com/anonymous/530242465ff00c5f2821febcceca8213.js"></script><link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css"><div id="gist40919598" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-gistfile1-txt" class="file">


  <div itemprop="text" class="blob-wrapper data type-text ">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-gistfile1-txt-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-gistfile1-txt-LC1" class="blob-code blob-code-inner js-file-line">&lt;div class="wrapperCTA"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-gistfile1-txt-LC2" class="blob-code blob-code-inner js-file-line">    &lt;ul class="CTAmenu"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-gistfile1-txt-LC3" class="blob-code blob-code-inner js-file-line">        &lt;li class="CTAlist" data-color="black" data-pipes="true" data-style="inline list" data-border="none" data-hover="none"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-gistfile1-txt-LC4" class="blob-code blob-code-inner js-file-line">            &lt;ul class="CTAdropdownList"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-gistfile1-txt-LC5" class="blob-code blob-code-inner js-file-line">                &lt;li&gt;&lt;a href="#link1"&gt;link1&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-gistfile1-txt-LC6" class="blob-code blob-code-inner js-file-line">                &lt;li&gt;&lt;span class="pipe"&gt;&lt;/span&gt;&lt;a href="#link2"&gt;link2&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-gistfile1-txt-LC7" class="blob-code blob-code-inner js-file-line">                &lt;li&gt;&lt;span class="pipe"&gt;&lt;/span&gt;&lt;a href="#link3"&gt;link4&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-gistfile1-txt-LC8" class="blob-code blob-code-inner js-file-line">            &lt;/ul&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-gistfile1-txt-LC9" class="blob-code blob-code-inner js-file-line">        &lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-gistfile1-txt-LC10" class="blob-code blob-code-inner js-file-line">    &lt;/ul&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="file-gistfile1-txt-LC11" class="blob-code blob-code-inner js-file-line">&lt;/div&gt;</td>
      </tr>
</tbody></table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/anonymous/530242465ff00c5f2821febcceca8213/raw/a76596f9f4be88cf57f3fae9f7fe3fc955059344/gistfile1.txt" style="float:right">view raw</a>
        <a href="https://gist.github.com/anonymous/530242465ff00c5f2821febcceca8213#file-gistfile1-txt">gistfile1.txt</a>
        hosted with ❤ by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>

  <p></p>
</section>
      <br><hr><br>

      <!--6. gfol styles -->


    <p>
      </p><h2 id="gfol">GFOL Styles</h2>
      <p>
      1. GFOL Light Blue<br>

            </p><div class="CTAwrapper" data-font="90">
              <ul class="CTAmenu" data-brand="gfol">
                  <li class="CTAlist" data-color="gfol blue">
                      <a class="CTAbutton" href="javascript:void(0)">button</a>
                  </li>
              </ul>
            </div>
            <br>

            <div><div id="highlighter_172960" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">&lt;div class=</code><code class="js string">"CTAwrapper"</code> <code class="js plain">data-font=</code><code class="js string">"90"</code><code class="js plain">&gt;</code></div><div class="line number2 index1 alt1"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;ul class=</code><code class="js string">"CTAmenu"</code> <code class="js plain">data-brand=</code><code class="js string">"gfol"</code><code class="js plain">&gt;</code></div><div class="line number3 index2 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-color=</code><code class="js string">"gfol blue"</code><code class="js plain">&gt;</code></div><div class="line number4 index3 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;a class=</code><code class="js string">"CTAbutton"</code> <code class="js plain">href=</code><code class="js string">"javascript:void(0)"</code><code class="js plain">&gt;button&lt;/a&gt;</code></div><div class="line number5 index4 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/li&gt;</code></div><div class="line number6 index5 alt1"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;/ul&gt;</code></div><div class="line number7 index6 alt2"><code class="js plain">&lt;/div&gt;</code></div></div></td></tr></tbody></table></div></div>


      <p></p>

      <p>
      1a. GFOL Coral<br>

          </p><div class="CTAwrapper" data-font="90">
            <ul class="CTAmenu" data-brand="gfol">
                <li class="CTAlist" data-color="gfol coral">
                    <a class="CTAbutton" href="javascript:void(0)">button</a>
                </li>
            </ul>
          </div>
          <br>

          <div><div id="highlighter_296274" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">&lt;div class=</code><code class="js string">"CTAwrapper"</code> <code class="js plain">data-font=</code><code class="js string">"90"</code><code class="js plain">&gt;</code></div><div class="line number2 index1 alt1"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;ul class=</code><code class="js string">"CTAmenu"</code> <code class="js plain">data-brand=</code><code class="js string">"gfol"</code><code class="js plain">&gt;</code></div><div class="line number3 index2 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-color=</code><code class="js string">"gfol coral"</code><code class="js plain">&gt;</code></div><div class="line number4 index3 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;a class=</code><code class="js string">"CTAbutton"</code> <code class="js plain">href=</code><code class="js string">"javascript:void(0)"</code><code class="js plain">&gt;button&lt;/a&gt;</code></div><div class="line number5 index4 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/li&gt;</code></div><div class="line number6 index5 alt1"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;/ul&gt;</code></div><div class="line number7 index6 alt2"><code class="js plain">&lt;/div&gt;</code></div></div></td></tr></tbody></table></div></div>

           <div class="CTAwrapper">
              <ul class="CTAmenu" data-brand="gfol">
                  <li class="CTAlist" data-color="gfol coral" data-style="inline list">
                      <a class="CTAbutton" href="javascript:void(0)">dropdown w/ hover <span class="plusMinus"></span></a>
                      <ul class="CTAdropdownList">
                          <li><a href="#link1" tabindex="-1">link 1</a></li>
                          <li><a href="#link2" tabindex="-1">link</a></li>
                          <li><a href="#link3" tabindex="-1">link</a></li>
                      </ul>
                  </li>
              </ul>
            </div>


      <p></p>

      <br>
      <p>
      2. GFOL Gap Blue<br>

                </p><div class="CTAwrapper">
                  <ul class="CTAmenu" data-brand="gfol">
                      <li class="CTAlist" data-color="gap blue">
                          <a class="CTAbutton" href="javascript:void(0)">button</a>
                      </li>
                  </ul>
                </div>

                <div><div id="highlighter_432149" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">&lt;div class=</code><code class="js string">"CTAwrapper"</code><code class="js plain">&gt;</code></div><div class="line number2 index1 alt1"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;ul class=</code><code class="js string">"CTAmenu"</code> <code class="js plain">data-brand=</code><code class="js string">"gfol"</code><code class="js plain">&gt;</code></div><div class="line number3 index2 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-color=</code><code class="js string">"gap blue"</code><code class="js plain">&gt;</code></div><div class="line number4 index3 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;a class=</code><code class="js string">"CTAbutton"</code> <code class="js plain">href=</code><code class="js string">"javascript:void(0)"</code><code class="js plain">&gt;button&lt;/a&gt;</code></div><div class="line number5 index4 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/li&gt;</code></div><div class="line number6 index5 alt1"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;/ul&gt;</code></div><div class="line number7 index6 alt2"><code class="js plain">&lt;/div&gt;</code></div></div></td></tr></tbody></table></div></div>

                <br>
                <div class="CTAwrapper">
                  <ul class="CTAmenu" data-brand="gfol">
                      <li class="CTAlist" data-color="gap blue" data-hover="gap blue">
                          <a class="CTAbutton" href="javascript:void(0)">dropdown <span class="plusMinus"></span></a>
                          <ul class="CTAdropdownList">
                              <li><a href="#link1" tabindex="-1">link 1</a></li>
                              <li><a href="#link2" tabindex="-1">link</a></li>
                              <li><a href="#link3" tabindex="-1">link</a></li>
                          </ul>
                      </li>
                  </ul>
                </div>

                <div><div id="highlighter_417255" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div><div class="line number8 index7 alt1">8</div><div class="line number9 index8 alt2">9</div><div class="line number10 index9 alt1">10</div><div class="line number11 index10 alt2">11</div><div class="line number12 index11 alt1">12</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">&lt;div class=</code><code class="js string">"CTAwrapper"</code><code class="js plain">&gt;</code></div><div class="line number2 index1 alt1"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;ul class=</code><code class="js string">"CTAmenu"</code> <code class="js plain">data-brand=</code><code class="js string">"gfol"</code><code class="js plain">&gt;</code></div><div class="line number3 index2 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-color=</code><code class="js string">"gap blue"</code> <code class="js plain">data-hover=</code><code class="js string">"gap blue"</code><code class="js plain">&gt;</code></div><div class="line number4 index3 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;a class=</code><code class="js string">"CTAbutton"</code> <code class="js plain">href=</code><code class="js string">"javascript:void(0)"</code><code class="js plain">&gt;dropdown &lt;span class=</code><code class="js string">"plusMinus"</code><code class="js plain">&gt;&lt;/span&gt;&lt;/a&gt;</code></div><div class="line number5 index4 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;ul class=</code><code class="js string">"CTAdropdownList"</code><code class="js plain">&gt;</code></div><div class="line number6 index5 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li&gt;&lt;a href=</code><code class="js string">"#link1"</code> <code class="js plain">tabindex=</code><code class="js string">"-1"</code><code class="js plain">&gt;link 1&lt;/a&gt;&lt;/li&gt;</code></div><div class="line number7 index6 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li&gt;&lt;a href=</code><code class="js string">"#link2"</code> <code class="js plain">tabindex=</code><code class="js string">"-1"</code><code class="js plain">&gt;link&lt;/a&gt;&lt;/li&gt;</code></div><div class="line number8 index7 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li&gt;&lt;a href=</code><code class="js string">"#link3"</code> <code class="js plain">tabindex=</code><code class="js string">"-1"</code><code class="js plain">&gt;link&lt;/a&gt;&lt;/li&gt;</code></div><div class="line number9 index8 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/ul&gt;</code></div><div class="line number10 index9 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/li&gt;</code></div><div class="line number11 index10 alt2"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;/ul&gt;</code></div><div class="line number12 index11 alt1"><code class="js plain">&lt;/div&gt;</code></div></div></td></tr></tbody></table></div></div>


      <p></p>

      <br>
      <p>

      3. GFOL White<br>

                </p><div class="CTAwrapper">
                  <ul class="CTAmenu" data-brand="gfol">
                      <li class="CTAlist" data-color="white">
                          <a class="CTAbutton" href="javascript:void(0)">button w/ hover</a>
                      </li>
                  </ul>
                </div>

                <div><div id="highlighter_380001" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">&lt;div class=</code><code class="js string">"CTAwrapper"</code><code class="js plain">&gt;</code></div><div class="line number2 index1 alt1"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;ul class=</code><code class="js string">"CTAmenu"</code> <code class="js plain">data-brand=</code><code class="js string">"gfol"</code><code class="js plain">&gt;</code></div><div class="line number3 index2 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-color=</code><code class="js string">"white"</code><code class="js plain">&gt;</code></div><div class="line number4 index3 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;a class=</code><code class="js string">"CTAbutton"</code> <code class="js plain">href=</code><code class="js string">"javascript:void(0)"</code><code class="js plain">&gt;button w/ hover&lt;/a&gt;</code></div><div class="line number5 index4 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/li&gt;</code></div><div class="line number6 index5 alt1"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;/ul&gt;</code></div><div class="line number7 index6 alt2"><code class="js plain">&lt;/div&gt;</code></div></div></td></tr></tbody></table></div></div>


                <br>
                <div class="CTAwrapper">
                  <ul class="CTAmenu" data-brand="gfol">
                      <li class="CTAlist" data-color="white">
                          <a class="CTAbutton" href="javascript:void(0)">dropdown w/ hover <span class="plusMinus"></span></a>
                          <ul class="CTAdropdownList">
                              <li><a href="#link1" tabindex="-1">link 1</a></li>
                              <li><a href="#link2" tabindex="-1">link</a></li>
                              <li><a href="#link3" tabindex="-1">link</a></li>
                          </ul>
                      </li>
                  </ul>
                </div>

                <div><div id="highlighter_219585" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div><div class="line number8 index7 alt1">8</div><div class="line number9 index8 alt2">9</div><div class="line number10 index9 alt1">10</div><div class="line number11 index10 alt2">11</div><div class="line number12 index11 alt1">12</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">&lt;div class=</code><code class="js string">"CTAwrapper"</code><code class="js plain">&gt;</code></div><div class="line number2 index1 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;ul class=</code><code class="js string">"CTAmenu"</code> <code class="js plain">data-brand=</code><code class="js string">"gfol"</code><code class="js plain">&gt;</code></div><div class="line number3 index2 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-color=</code><code class="js string">"white"</code><code class="js plain">&gt;</code></div><div class="line number4 index3 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;a class=</code><code class="js string">"CTAbutton"</code> <code class="js plain">href=</code><code class="js string">"javascript:void(0)"</code><code class="js plain">&gt;dropdown w/ hover &lt;span class=</code><code class="js string">"plusMinus"</code><code class="js plain">&gt;&lt;/span&gt;&lt;/a&gt;</code></div><div class="line number5 index4 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;ul class=</code><code class="js string">"CTAdropdownList"</code><code class="js plain">&gt;</code></div><div class="line number6 index5 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li&gt;&lt;a href=</code><code class="js string">"#link1"</code> <code class="js plain">tabindex=</code><code class="js string">"-1"</code><code class="js plain">&gt;link 1&lt;/a&gt;&lt;/li&gt;</code></div><div class="line number7 index6 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li&gt;&lt;a href=</code><code class="js string">"#link2"</code> <code class="js plain">tabindex=</code><code class="js string">"-1"</code><code class="js plain">&gt;link&lt;/a&gt;&lt;/li&gt;</code></div><div class="line number8 index7 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li&gt;&lt;a href=</code><code class="js string">"#link3"</code> <code class="js plain">tabindex=</code><code class="js string">"-1"</code><code class="js plain">&gt;link&lt;/a&gt;&lt;/li&gt;</code></div><div class="line number9 index8 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/ul&gt;</code></div><div class="line number10 index9 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/li&gt;</code></div><div class="line number11 index10 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/ul&gt;</code></div><div class="line number12 index11 alt1"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;/div&gt;</code></div></div></td></tr></tbody></table></div></div>
      <p></p>

      <br>
      <p>

      4. GFOL White w/ Gap Blue Hover<br>

                </p><div class="CTAwrapper">
                  <ul class="CTAmenu" data-brand="gfol">
                      <li class="CTAlist" data-color="white" data-hover="gap blue">
                          <a class="CTAbutton" href="javascript:void(0)">dropdown w/ hover <span class="plusMinus"></span></a>
                          <ul class="CTAdropdownList">
                              <li><a href="#link1" tabindex="-1">link 1</a></li>
                              <li><a href="#link2" tabindex="-1">link</a></li>
                              <li><a href="#link3" tabindex="-1">link</a></li>
                          </ul>
                      </li>
                  </ul>
                </div>

                <div><div id="highlighter_99834" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div><div class="line number8 index7 alt1">8</div><div class="line number9 index8 alt2">9</div><div class="line number10 index9 alt1">10</div><div class="line number11 index10 alt2">11</div><div class="line number12 index11 alt1">12</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">&lt;div class=</code><code class="js string">"CTAwrapper"</code><code class="js plain">&gt;</code></div><div class="line number2 index1 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;ul class=</code><code class="js string">"CTAmenu"</code> <code class="js plain">data-brand=</code><code class="js string">"gfol"</code><code class="js plain">&gt;</code></div><div class="line number3 index2 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-color=</code><code class="js string">"white"</code> <code class="js plain">data-hover=</code><code class="js string">"gap blue"</code><code class="js plain">&gt;</code></div><div class="line number4 index3 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;a class=</code><code class="js string">"CTAbutton"</code> <code class="js plain">href=</code><code class="js string">"javascript:void(0)"</code><code class="js plain">&gt;dropdown w/ hover &lt;span class=</code><code class="js string">"plusMinus"</code><code class="js plain">&gt;&lt;/span&gt;&lt;/a&gt;</code></div><div class="line number5 index4 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;ul class=</code><code class="js string">"CTAdropdownList"</code><code class="js plain">&gt;</code></div><div class="line number6 index5 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li&gt;&lt;a href=</code><code class="js string">"#link1"</code> <code class="js plain">tabindex=</code><code class="js string">"-1"</code><code class="js plain">&gt;link 1&lt;/a&gt;&lt;/li&gt;</code></div><div class="line number7 index6 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li&gt;&lt;a href=</code><code class="js string">"#link2"</code> <code class="js plain">tabindex=</code><code class="js string">"-1"</code><code class="js plain">&gt;link&lt;/a&gt;&lt;/li&gt;</code></div><div class="line number8 index7 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li&gt;&lt;a href=</code><code class="js string">"#link3"</code> <code class="js plain">tabindex=</code><code class="js string">"-1"</code><code class="js plain">&gt;link&lt;/a&gt;&lt;/li&gt;</code></div><div class="line number9 index8 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/ul&gt;</code></div><div class="line number10 index9 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/li&gt;</code></div><div class="line number11 index10 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/ul&gt;</code></div><div class="line number12 index11 alt1"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;/div&gt;</code></div></div></td></tr></tbody></table></div></div>
      <p></p>

       <br>
      <p>

      5. GFOL White w/ Red Hover<br>

                </p><div class="CTAwrapper">
                  <ul class="CTAmenu" data-brand="gfol">
                      <li class="CTAlist" data-color="gfol red">
                          <a class="CTAbutton" href="javascript:void(0)">dropdown w/ hover <span class="plusMinus"></span></a>
                          <ul class="CTAdropdownList">
                              <li><a href="#link1" tabindex="-1">link 1</a></li>
                              <li><a href="#link2" tabindex="-1">link</a></li>
                              <li><a href="#link3" tabindex="-1">link</a></li>
                          </ul>
                      </li>
                  </ul>
                </div>

                <div><div id="highlighter_647386" class="syntaxhighlighter  js"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div><div class="line number8 index7 alt1">8</div><div class="line number9 index8 alt2">9</div><div class="line number10 index9 alt1">10</div><div class="line number11 index10 alt2">11</div><div class="line number12 index11 alt1">12</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">&lt;div class=</code><code class="js string">"CTAwrapper"</code><code class="js plain">&gt;</code></div><div class="line number2 index1 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;ul class=</code><code class="js string">"CTAmenu"</code> <code class="js plain">data-brand=</code><code class="js string">"gfol"</code><code class="js plain">&gt;</code></div><div class="line number3 index2 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li class=</code><code class="js string">"CTAlist"</code> <code class="js plain">data-color=</code><code class="js string">"gfol red"</code><code class="js plain">&gt;</code></div><div class="line number4 index3 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;a class=</code><code class="js string">"CTAbutton"</code> <code class="js plain">href=</code><code class="js string">"javascript:void(0)"</code><code class="js plain">&gt;dropdown w/ hover &lt;span class=</code><code class="js string">"plusMinus"</code><code class="js plain">&gt;&lt;/span&gt;&lt;/a&gt;</code></div><div class="line number5 index4 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;ul class=</code><code class="js string">"CTAdropdownList"</code><code class="js plain">&gt;</code></div><div class="line number6 index5 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li&gt;&lt;a href=</code><code class="js string">"#link1"</code> <code class="js plain">tabindex=</code><code class="js string">"-1"</code><code class="js plain">&gt;link 1&lt;/a&gt;&lt;/li&gt;</code></div><div class="line number7 index6 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li&gt;&lt;a href=</code><code class="js string">"#link2"</code> <code class="js plain">tabindex=</code><code class="js string">"-1"</code><code class="js plain">&gt;link&lt;/a&gt;&lt;/li&gt;</code></div><div class="line number8 index7 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;li&gt;&lt;a href=</code><code class="js string">"#link3"</code> <code class="js plain">tabindex=</code><code class="js string">"-1"</code><code class="js plain">&gt;link&lt;/a&gt;&lt;/li&gt;</code></div><div class="line number9 index8 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/ul&gt;</code></div><div class="line number10 index9 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/li&gt;</code></div><div class="line number11 index10 alt2"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">&lt;/ul&gt;</code></div><div class="line number12 index11 alt1"><code class="js spaces">&nbsp;&nbsp;</code><code class="js plain">&lt;/div&gt;</code></div></div></td></tr></tbody></table></div></div>
      <p></p>
    <p></p>

      <br><hr><br>

      <!--7. Examples -->
       <p>
    </p><h2 style="color:red" id="examples">7. Examples</h2>
       <p>
      </p><h3><u>example 1</u>: 2 column boxed list on mobile, inline-list with pipes on desktop</h3>

      <div class="CTAwrapper">
          <ul class="CTAmenu" data-size-at-md="half">
              <li class="CTAlist" data-color="black" data-pipes-at-lg="true" data-style-at-md="list" data-style-at-lg="inline list" data-border-at-lg="none">
                  <ul class="CTAdropdownList">
                    <li><a href="#link1">link1</a></li>
                    <li><a href="#link2">link2</a></li>
                    <li><a href="#link2">link3</a></li>
                    <li><a href="#link3">link4</a></li>
                  </ul>
              </li>
          </ul>
      </div>

      <script src="https://gist.github.com/anonymous/a59b81c3c3f1bafda70e36ceca55a254.js"></script><link rel="stylesheet" href="https://assets-cdn.github.com/assets/gist-embed-2c768148c4d27cab10fe818942078e18.css"><div id="gist40919604" class="gist">
    <div class="gist-file">
      <div class="gist-data">
        <div class="js-gist-file-update-container js-task-list-container file-box">
  <div id="file-gistfile1-txt" class="file">


  <div itemprop="text" class="blob-wrapper data type-text ">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tbody><tr>
        <td id="file-gistfile1-txt-L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="file-gistfile1-txt-LC1" class="blob-code blob-code-inner js-file-line">  &lt;div class="wrapperCTA"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="file-gistfile1-txt-LC2" class="blob-code blob-code-inner js-file-line">      &lt;ul class="CTAmenu" data-size-at-md="half"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="file-gistfile1-txt-LC3" class="blob-code blob-code-inner js-file-line">          &lt;li class="CTAlist" data-color="black" data-pipes-at-lg="true" data-style-at-md="list" data-style-at-lg="inline list" data-border-at-lg="none"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="file-gistfile1-txt-LC4" class="blob-code blob-code-inner js-file-line">              &lt;ul class="CTAdropdownList"&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="file-gistfile1-txt-LC5" class="blob-code blob-code-inner js-file-line">                &lt;li&gt;&lt;a href="#link1"&gt;link1&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="file-gistfile1-txt-LC6" class="blob-code blob-code-inner js-file-line">                &lt;li&gt;&lt;a href="#link2"&gt;link2&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="file-gistfile1-txt-LC7" class="blob-code blob-code-inner js-file-line">                &lt;li&gt;&lt;a href="#link2"&gt;link3&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="file-gistfile1-txt-LC8" class="blob-code blob-code-inner js-file-line">                &lt;li&gt;&lt;a href="#link3"&gt;link4&lt;/a&gt;&lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="file-gistfile1-txt-LC9" class="blob-code blob-code-inner js-file-line">              &lt;/ul&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="file-gistfile1-txt-LC10" class="blob-code blob-code-inner js-file-line">          &lt;/li&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="file-gistfile1-txt-LC11" class="blob-code blob-code-inner js-file-line">      &lt;/ul&gt;</td>
      </tr>
      <tr>
        <td id="file-gistfile1-txt-L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="file-gistfile1-txt-LC12" class="blob-code blob-code-inner js-file-line">  &lt;/div&gt;</td>
      </tr>
</tbody></table>


  </div>

  </div>
</div>

      </div>
      <div class="gist-meta">
        <a href="https://gist.github.com/anonymous/a59b81c3c3f1bafda70e36ceca55a254/raw/054c7711129ad7d06ea85b56202d9b744046799d/gistfile1.txt" style="float:right">view raw</a>
        <a href="https://gist.github.com/anonymous/a59b81c3c3f1bafda70e36ceca55a254#file-gistfile1-txt">gistfile1.txt</a>
        hosted with ❤ by <a href="https://github.com">GitHub</a>
      </div>
    </div>
</div>



     <!--  <h3 id="examples"><u>example 2</u>: 2 column stylized list on mobile, dropdown on desktop</h3>

      <div class="CTAwrapper">
          <ul class="CTAmenu" data-size-at-md="half">
              <li class="CTAlist" data-color="black" data-style-at-md="list" data-border-at-md="dividers">
                <a class="CTAbutton" href="javascript:void(0)">Dropdown <span class="plusMinus"></span></a>
                  <ul class="CTAdropdownList">
                    <li><a href="#link1">link1</a></li>
                    <li><a href="#link2">link2</a></li>
                    <li><a href="#link2">link3</a></li>
                    <li><a href="#link3">link4</a></li>
                  </ul>
              </li>
          </ul>
      </div>

      <script src="https://gist.github.com/anonymous/ef7ba0074b49a387d1f200346c37fd76.js"></script>
      </p> -->
  <p></p>

  </div>



</div><!-- end content div -->

<footer>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="wcd-CTAdropdowns.js"></script>

<script>
// ===== Scroll to Top ====
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>
<span class="_hsShareImage hsShareImage">&nbsp;</span><span id="buffer-extension-hover-button" style="display: none; position: absolute; z-index: 8675309; width: 100px; height: 25px; background-image: url(&quot;chrome-extension://noojglkidnpfjbincgijbaiedldjfbhh/data/shared/img/buffer-hover-icon@1x.png&quot;); background-size: 100px 25px; opacity: 0.9; cursor: pointer;"></span></body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>
