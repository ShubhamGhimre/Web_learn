<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <!-- Match the root element -->
  <xsl:template match="/catalog">
    <html>
      <body>
        <h2>Book Catalog</h2>
        <table border="1">
          <tr bgcolor="#9acd32">
            <th>Author</th>
            <th>Title</th>
            <th>Price</th>
          </tr>
          <!-- Match each book element -->
          <xsl:for-each select="book">
            <tr>
              <td><xsl:value-of select="author"/></td>
              <td><xsl:value-of select="title"/></td>
              <td><xsl:value-of select="price"/></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
