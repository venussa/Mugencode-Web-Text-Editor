<?php

namespace application\config;

/**
 * IamRoot
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2018 - 2022, Iamroot Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	IamRoot
 * @author	Shigansina
 * @link	https://iam-root.tech
 * @since	Version 1.0.0
 * @filesource
 */

 /**
 * document Class
 *
 * List type of document type of site content
 * read from extention file and document type
 *
 * @package		application
 * @subpackage	config
 * @category	content type
 * @author		IamRoot Team
 */

class document{

	// --------------------------------------------------------------------

    /**
     * content type
     *
     * set content type in array 
     *
     * @return array
     */

	public function content_type(){

		return json_decode(json_encode(array(
			'hqx'	=>	array('application/mac-binhex40', 'application/mac-binhex', 'application/x-binhex40', 'application/x-mac-binhex40'),
			'cpt'	=>	'application/mac-compactpro',
			'csv'	=>	array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain'),
			'bin'	=>	array('application/macbinary', 'application/mac-binary', 'application/octet-stream', 'application/x-binary', 'application/x-macbinary'),
			'dms'	=>	'application/octet-stream',
			'lha'	=>	'application/octet-stream',
			'lzh'	=>	'application/octet-stream',
			'exe'	=>	array('application/octet-stream', 'application/x-msdownload'),
			'class'	=>	'application/octet-stream',
			'psd'	=>	array('application/x-photoshop', 'image/vnd.adobe.photoshop'),
			'so'	=>	'application/octet-stream',
			'sea'	=>	'application/octet-stream',
			'dll'	=>	'application/octet-stream',
			'oda'	=>	'application/oda',
			'pdf'	=>	array('application/pdf', 'application/force-download', 'application/x-download', 'binary/octet-stream'),
			'ai'	=>	array('application/pdf', 'application/postscript'),
			'eps'	=>	'application/postscript',
			'ps'	=>	'application/postscript',
			'smi'	=>	'application/smil',
			'smil'	=>	'application/smil',
			'mif'	=>	'application/vnd.mif',
			'xls'	=>	array('application/vnd.ms-excel', 'application/msexcel', 'application/x-msexcel', 'application/x-ms-excel', 'application/x-excel', 'application/x-dos_ms_excel', 'application/xls', 'application/x-xls', 'application/excel', 'application/download', 'application/vnd.ms-office', 'application/msword'),
			'ppt'	=>	array('application/powerpoint', 'application/vnd.ms-powerpoint', 'application/vnd.ms-office', 'application/msword'),
			'pptx'	=> 	array('application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/x-zip', 'application/zip'),
			'wbxml'	=>	'application/wbxml',
			'wmlc'	=>	'application/wmlc',
			'dcr'	=>	'application/x-director',
			'dir'	=>	'application/x-director',
			'dxr'	=>	'application/x-director',
			'dvi'	=>	'application/x-dvi',
			'gtar'	=>	'application/x-gtar',
			'gz'	=>	'application/x-gzip',
			'gzip'  =>	'application/x-gzip',
			'php'	=>	array('application/x-httpd-php', 'application/php', 'application/x-php', 'text/php', 'text/x-php', 'application/x-httpd-php-source'),
			'php4'	=>	'application/x-httpd-php',
			'php3'	=>	'application/x-httpd-php',
			'phtml'	=>	'application/x-httpd-php',
			'phps'	=>	'application/x-httpd-php-source',
			'js'	=>	array('application/x-javascript', 'text/plain'),
			'swf'	=>	'application/x-shockwave-flash',
			'sit'	=>	'application/x-stuffit',
			'tar'	=>	'application/x-tar',
			'tgz'	=>	array('application/x-tar', 'application/x-gzip-compressed'),
			'z'	=>	'application/x-compress',
			'xhtml'	=>	'application/xhtml+xml',
			'xht'	=>	'application/xhtml+xml',
			'zip'	=>	array('application/x-zip', 'application/zip', 'application/x-zip-compressed', 'application/s-compressed', 'multipart/x-zip'),
			'rar'	=>	array('application/x-rar', 'application/rar', 'application/x-rar-compressed'),
			'mid'	=>	'audio/midi',
			'midi'	=>	'audio/midi',
			'mpga'	=>	'audio/mpeg',
			'mp2'	=>	'audio/mpeg',
			'mp3'	=>	array('audio/mpeg', 'audio/mpg', 'audio/mpeg3', 'audio/mp3'),
			'aif'	=>	array('audio/x-aiff', 'audio/aiff'),
			'aiff'	=>	array('audio/x-aiff', 'audio/aiff'),
			'aifc'	=>	'audio/x-aiff',
			'ram'	=>	'audio/x-pn-realaudio',
			'rm'	=>	'audio/x-pn-realaudio',
			'rpm'	=>	'audio/x-pn-realaudio-plugin',
			'ra'	=>	'audio/x-realaudio',
			'rv'	=>	'video/vnd.rn-realvideo',
			'wav'	=>	array('audio/x-wav', 'audio/wave', 'audio/wav'),
			'bmp'	=>	array('image/bmp', 'image/x-bmp', 'image/x-bitmap', 'image/x-xbitmap', 'image/x-win-bitmap', 'image/x-windows-bmp', 'image/ms-bmp', 'image/x-ms-bmp', 'application/bmp', 'application/x-bmp', 'application/x-win-bitmap'),
			'gif'	=>	'image/gif',
			'jpeg'	=>	array('image/jpeg', 'image/pjpeg'),
			'jpg'	=>	array('image/jpeg', 'image/pjpeg'),
			'jpe'	=>	array('image/jpeg', 'image/pjpeg'),
			'jp2'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'j2k'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'jpf'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'jpg2'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'jpx'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'jpm'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'mj2'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'mjp2'	=>	array('image/jp2', 'video/mj2', 'image/jpx', 'image/jpm'),
			'png'	=>	array('image/png',  'image/x-png'),
			'tiff'	=>	'image/tiff',
			'tif'	=>	'image/tiff',
			'css'	=>	array('text/css', 'text/plain'),
			'html'	=>	array('text/html', 'text/plain'),
			'htm'	=>	array('text/html', 'text/plain'),
			'shtml'	=>	array('text/html', 'text/plain'),
			'txt'	=>	'text/plain',
			'text'	=>	'text/plain',
			'log'	=>	array('text/plain', 'text/x-log'),
			'rtx'	=>	'text/richtext',
			'rtf'	=>	'text/rtf',
			'xml'	=>	array('application/xml', 'text/xml', 'text/plain'),
			'xsl'	=>	array('application/xml', 'text/xsl', 'text/xml'),
			'mpeg'	=>	'video/mpeg',
			'mpg'	=>	'video/mpeg',
			'mpe'	=>	'video/mpeg',
			'qt'	=>	'video/quicktime',
			'mov'	=>	'video/quicktime',
			'avi'	=>	array('video/x-msvideo', 'video/msvideo', 'video/avi', 'application/x-troff-msvideo'),
			'movie'	=>	'video/x-sgi-movie',
			'doc'	=>	array('application/msword', 'application/vnd.ms-office'),
			'docx'	=>	array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/msword', 'application/x-zip'),
			'dot'	=>	array('application/msword', 'application/vnd.ms-office'),
			'dotx'	=>	array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/msword'),
			'xlsx'	=>	array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/zip', 'application/vnd.ms-excel', 'application/msword', 'application/x-zip'),
			'word'	=>	array('application/msword', 'application/octet-stream'),
			'xl'	=>	'application/excel',
			'eml'	=>	'message/rfc822',
			'json'  =>	array('application/json', 'text/json'),
			'pem'   =>	array('application/x-x509-user-cert', 'application/x-pem-file', 'application/octet-stream'),
			'p10'   =>	array('application/x-pkcs10', 'application/pkcs10'),
			'p12'   =>	'application/x-pkcs12',
			'p7a'   =>	'application/x-pkcs7-signature',
			'p7c'   =>	array('application/pkcs7-mime', 'application/x-pkcs7-mime'),
			'p7m'   =>	array('application/pkcs7-mime', 'application/x-pkcs7-mime'),
			'p7r'   =>	'application/x-pkcs7-certreqresp',
			'p7s'   =>	'application/pkcs7-signature',
			'crt'   =>	array('application/x-x509-ca-cert', 'application/x-x509-user-cert', 'application/pkix-cert'),
			'crl'   =>	array('application/pkix-crl', 'application/pkcs-crl'),
			'der'   =>	'application/x-x509-ca-cert',
			'kdb'   =>	'application/octet-stream',
			'pgp'   =>	'application/pgp',
			'gpg'   =>	'application/gpg-keys',
			'sst'   =>	'application/octet-stream',
			'csr'   =>	'application/octet-stream',
			'rsa'   =>	'application/x-pkcs7',
			'cer'   =>	array('application/pkix-cert', 'application/x-x509-ca-cert'),
			'3g2'   =>	'video/3gpp2',
			'3gp'   =>	array('video/3gp', 'video/3gpp'),
			'mp4'   =>	'video/mp4',
			'm4a'   =>	'audio/x-m4a',
			'f4v'   =>	array('video/mp4', 'video/x-f4v'),
			'flv'	=>	'video/x-flv',
			'webm'	=>	'video/webm',
			'aac'   =>	'audio/x-acc',
			'm4u'   =>	'application/vnd.mpegurl',
			'm3u'   =>	'text/plain',
			'xspf'  =>	'application/xspf+xml',
			'vlc'   =>	'application/videolan',
			'wmv'   =>	array('video/x-ms-wmv', 'video/x-ms-asf'),
			'au'    =>	'audio/x-au',
			'ac3'   =>	'audio/ac3',
			'flac'  =>	'audio/x-flac',
			'ogg'   =>	array('audio/ogg', 'video/ogg', 'application/ogg'),
			'kmz'	=>	array('application/vnd.google-earth.kmz', 'application/zip', 'application/x-zip'),
			'kml'	=>	array('application/vnd.google-earth.kml+xml', 'application/xml', 'text/xml'),
			'ics'	=>	'text/calendar',
			'ical'	=>	'text/calendar',
			'zsh'	=>	'text/x-scriptzsh',
			'7z'	=>	array('application/x-7z-compressed', 'application/x-compressed', 'application/x-zip-compressed', 'application/zip', 'multipart/x-zip'),
			'7zip'	=>	array('application/x-7z-compressed', 'application/x-compressed', 'application/x-zip-compressed', 'application/zip', 'multipart/x-zip'),
			'cdr'	=>	array('application/cdr', 'application/coreldraw', 'application/x-cdr', 'application/x-coreldraw', 'image/cdr', 'image/x-cdr', 'zz-application/zz-winassoc-cdr'),
			'wma'	=>	array('audio/x-ms-wma', 'video/x-ms-asf'),
			'jar'	=>	array('application/java-archive', 'application/x-java-application', 'application/x-jar', 'application/x-compressed'),
			'svg'	=>	array('image/svg+xml', 'application/xml', 'text/xml'),
			'vcf'	=>	'text/x-vcard',
			'srt'	=>	array('text/srt', 'text/plain'),
			'vtt'	=>	array('text/vtt', 'text/plain'),
			'ico'	=>	array('image/x-icon', 'image/x-ico', 'image/vnd.microsoft.icon'),
			'odc'	=>	'application/vnd.oasis.opendocument.chart',
			'otc'	=>	'application/vnd.oasis.opendocument.chart-template',
			'odf'	=>	'application/vnd.oasis.opendocument.formula',
			'otf'	=>	'application/vnd.oasis.opendocument.formula-template',
			'odg'	=>	'application/vnd.oasis.opendocument.graphics',
			'otg'	=>	'application/vnd.oasis.opendocument.graphics-template',
			'odi'	=>	'application/vnd.oasis.opendocument.image',
			'oti'	=>	'application/vnd.oasis.opendocument.image-template',
			'odp'	=>	'application/vnd.oasis.opendocument.presentation',
			'otp'	=>	'application/vnd.oasis.opendocument.presentation-template',
			'ods'	=>	'application/vnd.oasis.opendocument.spreadsheet',
			'ots'	=>	'application/vnd.oasis.opendocument.spreadsheet-template',
			'odt'	=>	'application/vnd.oasis.opendocument.text',
			'odm'	=>	'application/vnd.oasis.opendocument.text-master',
			'ott'	=>	'application/vnd.oasis.opendocument.text-template',
			'oth'	=>	'application/vnd.oasis.opendocument.text-web'
		)));

	}

	// --------------------------------------------------------------------

    /**
     * document type
     *
     * set document type in array 
     *
     * @return array
     */

	public function document_type(){

		return array(
			'xhtml11' 			=> '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">',
			'xhtml1-strict' 	=> '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">',
			'xhtml1-trans' 		=> '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',
			'xhtml1-frame' 		=> '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">',
			'xhtml-basic11' 	=> '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">',
			'html5' 			=> '<!DOCTYPE html>',
			'html4-strict' 		=> '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">',
			'html4-trans' 		=> '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">',
			'html4-frame' 		=> '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">',
			'mathml1' 			=> '<!DOCTYPE math SYSTEM "http://www.w3.org/Math/DTD/mathml1/mathml.dtd">',
			'mathml2' 			=> '<!DOCTYPE math PUBLIC "-//W3C//DTD MathML 2.0//EN" "http://www.w3.org/Math/DTD/mathml2/mathml2.dtd">',
			'svg10' 			=> '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.0//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">',
			'svg11' 			=> '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">',
			'svg11-basic' 		=> '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1 Basic//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11-basic.dtd">',
			'svg11-tiny'		=> '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1 Tiny//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11-tiny.dtd">',
			'xhtml-math-svg-xh' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0 plus SVG 1.1//EN" "http://www.w3.org/2002/04/xhtml-math-svg/xhtml-math-svg.dtd">',
			'xhtml-math-svg-sh' => '<!DOCTYPE svg:svg PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0 plus SVG 1.1//EN" "http://www.w3.org/2002/04/xhtml-math-svg/xhtml-math-svg.dtd">',
			'xhtml-rdfa-1' 		=> '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">',
			'xhtml-rdfa-2' 		=> '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.1//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-2.dtd">'
		);


	}
}