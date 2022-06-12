<xsl:stylesheet xmlns:xsl="https://github.com/lahiruchalana" version="1.0">
    <xsl:template match="/">
    <h2>Population of USA</h2>
    <table border="1">
        <tr bgcolor="#9acd32">
            <th style="text-align:left">Year</th>
            <th style="text-align:left">Population</th>
        </tr>
        <xsl:for-each select="data_set/population_data/data">
        <tr>
            <td>
                <xsl:value-of select="date"/>
            </td>
            <td>
                <xsl:value-of select="value"/>
            </td>
        </tr>
        </xsl:for-each>
    </table>
    </xsl:template>
</xsl:stylesheet>