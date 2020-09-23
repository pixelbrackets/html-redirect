<?php

use Pixelbrackets\HtmlRedirect\HtmlRedirect;
use PHPUnit\Framework\TestCase;

class HtmlRedirectTest extends TestCase
{
    public function testRedirectMarkupIsNotEmpty()
    {
        $this->assertNotEmpty(HtmlRedirect::redirect('https://example.com/'));
        $this->assertIsString(HtmlRedirect::redirect('https://example.com/'));
        $this->assertStringContainsString('meta http-equiv="refresh"', HtmlRedirect::redirect('https://example.com/'));
        $this->assertStringContainsString('example.com', HtmlRedirect::redirect('https://example.com/?foo=bar'));
    }
}
