# Anime_Website-Parser

Parse some Anime websites for my use:
 * FansubDB.com
 * LiveChart.me
 * db.fansubs.com.br

Based on [SimpleHTMLDom](https://sourceforge.net/projects/simplehtmldom/). Thanks for this project.

## How to use it?

 - Visit a page on:
   - [FansubDB.com](https://fansubdb.com) 
   - [LiveChart.me](https://www.livechart.me)
   - [db.fansubs.com.br](https://db.fansubs.com.br)
 
 ### For FansubDB.com
 
  - Choose a wiki page and show the source code of the page.
  - Copy the table content from the line `<table class="wikitable" style="width:100%">` to `</td></tr></table>` included.
  - Paste that on the file `fansubdb.html` present on this repo.
  - Visit `fansubdb_parser.php` on your php server
  - To fix the JSON content:
     - Replace `},]` by `}]`
     - Replace ` "` by `"`
     - Replace `" ` by `"`
     - Replace (LF)->` S`  by ` S`
 
 ### For LiveChart.me
 
  - Choose a page, add `?sortby=title&leftovers=no` to the end of the URL.
  - Copy the source of the page on the file `livechart.html` present on this repo.
  - Visit `livechart_parser.php` on your php server
  
  ### For db.fansubs.com.br
  
   - Choose a page from https://github.com/qgustavor/fansubdb/tree/master/_data/seasons
   - Save the `.yml` page on your computer
   - Change `NAME_OF_THE_FILE` in the file `db_fansubs.html` in the line: `var nativeObject = YAML.load("NAME_OF_THE_FILE.yml");` with the name of the file you've downloaded some minutes ago.
   - Visit `db_fansubs.html`; no need of php server, only a browser!
