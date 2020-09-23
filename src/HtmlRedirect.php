<?php
namespace Pixelbrackets\HtmlRedirect;

class HtmlRedirect
{
    /**
     * Redirect markup template
     *
     * @var string
     */
    protected static $redirectMarkup = '<!DOCTYPE HTML><html lang="en-US"><head><meta charset="UTF-8"><meta http-equiv="refresh" content="0; url=###REDIRECTURI###"><script type="text/javascript">window.location.href = "###REDIRECTURI###";</script><title>Page Redirection</title></head><body>If you are not redirected automatically, then follow this link to the <a href="###REDIRECTURI###">target location</a>.</body></html>';

    /**
     * Returns the markup to redirect to a given URI
     *
     * @param $redirectUri Uri to redirect to
     * @return string
     */
    public static function redirect($redirectUri): string
    {
        return str_replace('###REDIRECTURI###', htmlspecialchars($redirectUri), self::$redirectMarkup);
    }
}
