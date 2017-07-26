<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 
<xsl:template match="/">
<!--//match="/" 把此模板与 XML 源文档的根相联系-->
  <html>
  <body>
  <h2>---------------书籍清单--------------</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th width="100">书名</th>
      <th width="100">作者</th>
      <th width="100">出书日期</th>
    </tr>

    <xsl:for-each select="bookstore/book[booktime&gt;2000]">
    <!--XSL <xsl:for-each> 元素可用于选取指定的节点集中的每个 XML 元素-->
    <!--[booktime&gt;2000]筛选出书时间>2000-->

    <xsl:sort select="booktime"/>
    <!--数字按照从小到大排序，单词按照从A到Z排序，排序放在for-each的第一个子层-->

      <xsl:if test="booktime&gt;2014">
      <!--如果时间大于2014，则输出-->

        <tr style="text-align:center;">
        <!--<xsl:value-of> 元素用于提取某个 XML 元素的值，并把值添加到转换的输出流中-->
          <td><xsl:apply-templates select="bookname"/></td>
          <!--如果没有上面的for-each，这里要写详细路径bookstore/book/bookname-->
          <td><xsl:value-of select="bookauthor"/></td>
          <!--如需插入针对 XML 文件的多重条件测试，请向 XSL 文件添加 <xsl:choose>、<xsl:when> 以及 <xsl:otherwise> 元素-->
          <xsl:choose>
            <xsl:when test="booktime&gt;2016">
              <td bgcolor="#d45d5c"><xsl:value-of select="booktime"/></td>
            </xsl:when>
            <xsl:when test="booktime&gt;2015">
              <td bgcolor="#ff00ff"><xsl:value-of select="booktime"/></td>
            </xsl:when>
            <xsl:otherwise>
              <td><xsl:value-of select="booktime"/></td>
            </xsl:otherwise>
          </xsl:choose>

        </tr>
      </xsl:if>
    </xsl:for-each>
  <!--for-each结束-->
  </table>
  </body>
  </html>
</xsl:template>
<!--模板的结尾--> 
</xsl:stylesheet>
<!--样式表的结尾--> 