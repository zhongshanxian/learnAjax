<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 
<xsl:template match="/">
<!--//match="/" 把此模板与 XML 源文档的根相联系-->
  <html>
  <body>
  <h2>My CD Collection</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>Title</th>
      <th>Artist</th>
    </tr>
    <tr>
    <!--<xsl:value-of> 元素用于提取某个 XML 元素的值，并把值添加到转换的输出流中-->
      <td><xsl:value-of select="bookstore/book/bookname"/></td>
      <td><xsl:value-of select="bookstore/book/bookauthor"/></td>
    </tr>
  </table>
  </body>
  </html>
</xsl:template>
<!--模板的结尾--> 
</xsl:stylesheet>
<!--样式表的结尾--> 