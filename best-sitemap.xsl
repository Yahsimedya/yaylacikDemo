<xsl:stylesheet xmlns:html="http://www.w3.org/TR/REC-html40" xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0">
    <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <title>XML Sitemap Feed</title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <style type="text/css">
                body {
                    font-family: "Lucida Grande", "Lucida Sans Unicode", Tahoma, Verdana, sans-serif;
                    font-size: 13px
                }

                #header, #footer {
                    padding: 2px;
                    margin: 10px;
                    font-size: 8pt;
                    color: gray
                }

                a {
                    color: black
                }

                td {
                    font-size: 11px
                }

                th {
                    text-align: left;
                    padding-right: 30px;
                    font-size: 11px
                }

                tr.high {
                    background-color: whitesmoke
                }

                #footer img {
                    vertical-align: bottom
                }</style>
        </head>
        <body>
        <h1>XML Sitemap Feed</h1>
        <div id="header">
            <p>Bu XML Sitemap haritası sitenizin <a href="http://www.google.com">Google</a>, <a
                    href="http://www.bing.com/">Bing</a>, <a href="http://www.yahoo.com">Yahoo!</a> ve <a
                    href="http://www.ask.com">Ask</a> gibi arama motorlarında daha hızlı index alması için gerekli bir site haritasıdır.</p>
        </div>

        <div id="content">
            <table cellpadding="5">
                <tr class="high">
                    <th>#</th>
                    <th>URL</th>
                    <th># Images</th>
                    <th>Priority</th>
                    <th>Change Frequency</th>
                    <th>Last Changed</th>
                </tr>
                <xsl:variable name="lower" select="'abcdefghijklmnopqrstuvwxyz'"/>
                <xsl:variable name="upper" select="'ABCDEFGHIJKLMNOPQRSTUVWXYZ'"/>
                <xsl:for-each select="sitemap:urlset/sitemap:url">
                    <tr>
                        <xsl:if test="position() mod 2 != 1">
                            <xsl:attribute name="class">high</xsl:attribute>
                        </xsl:if>
                        <td>
                            <xsl:value-of select="position()"/>
                        </td>
                        <td>
                            <xsl:variable name="itemURL">
                                <xsl:value-of select="sitemap:loc"/>
                            </xsl:variable>
                            <a href="{$itemURL}">
                                <xsl:value-of select="sitemap:loc"/>
                            </a></td>
                        <td>
                            <xsl:value-of select="count(image:image)"/>
                        </td>
                        <td>
                            <xsl:value-of select="concat(sitemap:priority*100,'%')"/>
                        </td>
                        <td>
                            <xsl:value-of
                                select="concat(translate(substring(sitemap:changefreq, 1, 1),concat($lower, $upper),concat($upper, $lower)),substring(sitemap:changefreq, 2))"/>
                        </td>
                        <td>
                            <xsl:value-of
                                select="concat(substring(sitemap:lastmod,0,11),concat(' ', substring(sitemap:lastmod,12,5)))"/>
                        </td>
                    </tr>
                </xsl:for-each>
            </table>
        </div>
        <div id="footer">
            <p>
                <img src="data:image/gif;base64,R0lGODlhUAAPAJEAAGZmZv////9mAImOeSwAAAAAUAAPAAACoISPqcvtD0+YtNqLs968myCE4kiW5jkGw8q27gvDwYfWdq3G+i7T9w/M8Ya7GQAUoiSTEyYSKYA2nSKhdXUdCIlaXzRVDVdB0+dS2lJZ1bkt0Sgti6NysvM5jbq2ai2WywJHYrZUaEhIWJXm99foNiRI9XUoV4g4GJjJyEgBGAkEivIIyPUZeppCqorlheo6ulr00UFba3uLEaG7y9urUAAAOw%3D%3D"
                     alt="XML Sitemap" title="XML Sitemap"/> generated by <a href="http://www.yahsimedya.com/" title="haber scripti, haber yazılımı, haber sistemi, yahşi medya, yahsi medya">Yahşi Medya</a></p>
        </div>
        <script type="text/javascript" src="https://cdn.yoast.com/wp-includes/js/jquery/jquery.js"></script>
        <script type="text/javascript" src="https://cdn.yoast.com/wp-content/plugins/wordpress-seo-premium/js/dist/jquery.tablesorter.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery("#sitemap").tablesorter( { widgets: ['zebra'] } );
            });
        </script>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
