<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:php="http://php.net/xsl">	
	<xsl:template match="/EntriesModule">
		<div id="lastentriescarousel" class="carousel slide">
			<div class="carousel-inner">
				<xsl:for-each select="entries/entry">
					<xsl:if test="string-length(fields/field_logo/data/@image) &gt; 0">
						<div class="item">
							<xsl:variable name="url">
								<xsl:value-of select="url" />
							</xsl:variable>
							<a href="{$url}">
								<xsl:element name="img">
									<xsl:attribute name="src">
										<xsl:value-of select="fields/field_logo/data/@image" />
									</xsl:attribute>
									<xsl:attribute name="alt">
										<xsl:value-of select="name" />
									</xsl:attribute>
								</xsl:element>
								<div class="carousel-caption">
								<h4><xsl:value-of select="fields/field_titre_operation_commerciale/data/*" /></h4>
								<p><xsl:value-of select="fields/field_texte_operation_commerciale/data/*" /></p>
								</div>
							</a>
							
						</div>
					</xsl:if>
				</xsl:for-each>
				
			</div>
			
			<!-- Carousel nav 
			<a class="carousel-control left" href="#lastentriecarousel" data-slide="prev"><i class="icon-circle-arrow-left"></i></a>
			<a class="carousel-control right" href="#lastentriescarousel" data-slide="next"><i class="icon-circle-arrow-right"></i></a>-->
			
		</div>
	</xsl:template>
</xsl:stylesheet>
