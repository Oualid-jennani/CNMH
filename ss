<!--
    Rewrites requires Microsoft URL Rewrite Module for IIS
    Download: https://www.microsoft.com/en-us/download/details.aspx?id=47337
    Debug Help: https://docs.microsoft.com/en-us/iis/extensions/url-rewrite-module/using-failed-request-tracing-to-trace-rewrite-rules
-->
<configuration>
  <system.webServer>
  <modules>
        <remove name="WebDAVModule" />
    </modules>
    <handlers>
            <remove name="PHPFASTCGI" />
        <remove name="WebDAV" />
            <add name="PHPFASTCGI" path="*.php" verb="*" modules="FastCgiModule" scriptProcessor="C:\PHP\php-cgi.exe" resourceType="Either" />
    </handlers>
    <rewrite>
      <rules>
        <rule name="Imported Rule 1" stopProcessing="true">
          <match url="^(.*)/$" ignoreCase="false" />
          <conditions>
            <add input="{REQUEST_FILENAME}" matchType="IsDirectory" ignoreCase="false" negate="true" />
          </conditions>
          <action type="Redirect" redirectType="Permanent" url="/{R:1}" />
        </rule>
        <rule name="Imported Rule 2" stopProcessing="true">
          <match url="^" ignoreCase="false" />
          <conditions>
            <add input="{REQUEST_FILENAME}" matchType="IsDirectory" ignoreCase="false" negate="true" />
            <add input="{REQUEST_FILENAME}" matchType="IsFile" ignoreCase="false" negate="true" />
          </conditions>
          <action type="Rewrite" url="index.php" />
        </rule>
      </rules>
    </rewrite>
        <staticContent>
            <mimeMap fileExtension=".webp" mimeType="image/webp" />
        </staticContent>
  </system.webServer>
</configuration>