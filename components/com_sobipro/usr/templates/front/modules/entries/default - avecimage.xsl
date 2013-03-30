<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:php="http://php.net/xsl">	

	<xsl:template match="/EntriesModule">

			<xsl:for-each select="entries/entry">
				<div class="entry">
					
					<a>
						<xsl:attribute name="href">
						  <xsl:value-of select="url" />
						</xsl:attribute>
										
							<xsl:if test="string-length(fields/field_logo/data/@image) &gt; 0">
								<div id="logo" class="SPField pull-left">							
									<xsl:element name="img">
									  <xsl:attribute name="src">
									  <xsl:value-of select="fields/field_logo/data/@thumbnail" />
									  </xsl:attribute>
									  <xsl:attribute name="alt">
									  <xsl:value-of select="entry/name" />
									  </xsl:attribute>
									</xsl:element>							
								</div>
							</xsl:if>
							
							<div class="spField" id="nom">
							
								<xsl:choose>
								  <xsl:when test="string-length(name) &gt; 0">
									<xsl:value-of select="name" />
								  </xsl:when>
								  <xsl:otherwise>
									<xsl:value-of select="fields/field_name/data" />
								  </xsl:otherwise>
								</xsl:choose>
					
							</div>
					</a>
	
	
					<div class="spField" id="titre">
						<xsl:value-of select="fields/field_title/data" />			
					</div>
					
					<div class="spField" id="categorie">
						<xsl:if test="count(categories)">	
							<ul>
							<xsl:for-each select="categories/category">
							  <li><a>
								<xsl:attribute name="href">
								  <xsl:value-of select="@url" />
								</xsl:attribute>
								<xsl:value-of select="." /></a>
							  </li>		  
							</xsl:for-each>		
							</ul>
						</xsl:if>
					</div>	
					
				</div>
			</xsl:for-each>		

	</xsl:template>
</xsl:stylesheet>
