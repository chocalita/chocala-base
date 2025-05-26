<?php

namespace Chocala\System;

/**
 * Description of ContentType
 *
 * @author ypra
 */
class ContentType
{
    /* UTF-8 charset encode */
    public const CHARSET_UTF8 = 'UTF-8';

    /* ISO-8859-1 charset encode */
    public const CHARSET_ISO88591 = 'ISO-8859-1';

    /* Form urlencoded contents */
    public const APPLICATION_FORM_URLENCODED = 'application/x-www-form-urlencoded';

    /* Javascript contents */
    public const APPLICATION_JAVASCRIPT = 'application/x-javascript';

    /* JSON contents */
    public const APPLICATION_JSON = 'application/json';

    /* It's just a non-standard way of restating "octet-stream" */
    public const APPLICATION_BINARY = 'application/binary';

    /* Strict type for binary date, include to downloads */
    public const APPLICATION_OCTET_STREAM = 'application/octet-stream';

    /* PDF documents */
    public const APPLICATION_PDF = 'application/pdf';

    /* Rich Text Format contents */
    public const APPLICATION_RTF = 'application/rtf';

    /* Shockwave Flash contents */
    public const APPLICATION_SWF = 'application/x-shockwave-flash';

    /* Extensible MarkUp Language contents */
    public const APPLICATION_XML = 'application/xml';

    /* ZIP files */
    public const APPLICATION_ZIP = 'application/zip';

    /* Alternative files and attachments */
    public const MULTIPART_ALTERNATIVE = 'multipart/alternative';

    /* Type for .au and .snd files */
    public const TYPE_AUDIO = 'audio/basic';

    /* Microsoft Excel files */
    public const TYPE_EXCEL = 'application/x-msexcel';

    /* Form data contents */
    public const MULTIPART_FORM_DATA = 'multipart/form-data';

    /* Css content */
    public const TEXT_CSS = 'text/css';

    /* Enriched text */
    public const TEXT_ENRICHED = 'text/enriched';

    /* HiperText Markup Language contents */
    public const TEXT_HTML = 'text/html';

    /* Mixed files and attachments */
    public const MULTIPART_MIXED = 'multipart/mixed';

    /* Rich Text files */
    public const TEXT_RICHTEXT = 'text/richtext';

    /* Normal and plain texts */
    public const TEXT_PLAIN = 'text/plain';

    /* Wireless Application Protocol for movil devices apps */
    public const TYPE_WAP = 'text/vnd.wap.wml';

    /* Microsoft Word files */
    public const TYPE_WORD = 'application/x-msword';

    public const CONTENT_TYPE_LIST = [
        self::TEXT_PLAIN,
        self::APPLICATION_JAVASCRIPT,
        self::APPLICATION_JSON,
        self::TEXT_HTML,
        self::APPLICATION_XML
    ];
}
