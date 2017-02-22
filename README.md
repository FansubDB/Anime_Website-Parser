# Anime_Website-Parser

Parse some Anime websites for my use:
 * FansubDB.com
 * LiveChart.me

Based on [SimpleHTMLDom](https://sourceforge.net/projects/simplehtmldom/). Thanks for this project.

Use the changes from [Sunra repo](https://github.com/sunra/php-simple-html-dom-parser/blob/master/Src/Sunra/PhpSimple/simplehtmldom_1_5/simple_html_dom.php).

## How to use it?

 - Visit a page on [FansubDB.com](https://fansubdb.com) or [LiveChart.me](https://www.livechart.me).
 - For FansubDB.com: 
   - Choose a wiki page and show the source code of the page.
   - Copy the table content from the line `<table class="wikitable" style="width:100%">` to `</td></tr></table>` included.
   - Paste that on the file `fansubdb.html` present on this repo.
   - Run `fansubdb_parser.php`
 - For LiveChart.me:
   - Choose a page.
   - Copy the source of the page on the file `livechart.html` present on this repo.
   - Run `livechart_parser.php`

Visit the php page on your php server (the php server can be on your localhost or not!).
