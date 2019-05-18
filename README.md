# protected-PDFviewer
A PDF viewer built upon PDF.js which is copy protected

-------------
## Demo

There is a demo version live [here](http://atdebjoy.com/others/pdfview.php)            
Unfortunately it shows an error pdf as it need to be feeded with a POST request

----------
## Installation
- Copy the web folder and the pdfView.php file to your server
- Create a POST request feeding file value as the link of the pdf you want to view to the file pdfView.php            
Example:
```html
<form class="formpdf" action="pdfview.php" method="POST" target="_blank">
  <button name="file" type="submit" value="__Enter the Copied URL here__">Have A Read</button>
</form>
```
---
##### Read more about this project [here](http://atdebjoy.com/23)
