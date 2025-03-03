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
    public const string CHARSET_UTF8 = 'UTF-8';

    /* ISO-8859-1 charset encode */
    public const string CHARSET_ISO88591 = 'ISO-8859-1';

    /* Form urlencoded contents */
    public const string APPLICATION_FORM_URLENCODED = 'application/x-www-form-urlencoded';

    /* Javascript contents */
    public const string APPLICATION_JAVASCRIPT = 'application/x-javascript';

    /* JSON contents */
    public const string APPLICATION_JSON = 'application/json';

    /* It's just a non-standard way of restating "octet-stream" */
    public const string APPLICATION_BINARY = 'application/binary';

    /* Strict type for binary date, include to downloads */
    public const string APPLICATION_OCTET_STREAM = 'application/octet-stream';

    /* PDF documents */
    public const string APPLICATION_PDF = 'application/pdf';

    /* Rich Text Format contents */
    public const string APPLICATION_RTF = 'application/rtf';

    /* Shockwave Flash contents */
    public const string APPLICATION_SWF = 'application/x-shockwave-flash';

    /* Extensible MarkUp Language contents */
    public const string APPLICATION_XML = 'application/xml';

    /* ZIP files */
    public const string APPLICATION_ZIP = 'application/zip';

    /* Alternative files and attachments */
    public const string MULTIPART_ALTERNATIVE = 'multipart/alternative';

    /* Type for .au and .snd files */
    public const string TYPE_AUDIO = 'audio/basic';

    /* Microsoft Excel files */
    public const string TYPE_EXCEL = 'application/x-msexcel';

    /* Form data contents */
    public const string MULTIPART_FORM_DATA = 'multipart/form-data';

    /* Css content */
    public const string TEXT_CSS = 'text/css';

    /* Enriched text */
    public const TEXT_ENRICHED = 'text/enriched';

    /* HiperText Markup Language contents */
    public const string TEXT_HTML = 'text/html';

    /* Mixed files and attachments */
    public const string MULTIPART_MIXED = 'multipart/mixed';

    /* Rich Text files */
    public const string TEXT_RICHTEXT = 'text/richtext';

    /* Normal and plain texts */
    public const string TEXT_PLAIN = 'text/plain';

    /* Wireless Application Protocol for movil devices apps */
    public const string TYPE_WAP = 'text/vnd.wap.wml';

    /* Microsoft Word files */
    public const string TYPE_WORD = 'application/x-msword';

    public const CONTENT_TYPE_LIST = [
        self::TEXT_PLAIN,
        self::APPLICATION_JAVASCRIPT,
        self::APPLICATION_JSON,
        self::TEXT_HTML,
        self::APPLICATION_XML
    ];
}
