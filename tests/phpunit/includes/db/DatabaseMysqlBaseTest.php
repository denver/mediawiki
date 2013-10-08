<?php
/**
 * Holds tests for DatabaseMysqlBase MediaWiki class.
 *
 * @section LICENSE
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @author Antoine Musso
 * @author Bryan Davis
 * @copyright © 2013 Antoine Musso
 * @copyright © 2013 Bryan Davis
 * @copyright © 2013 Wikimedia Foundation Inc.
 */

/**
 * Fake class around abstract class so we can call concrete methods.
 */
class FakeDatabaseMysqlBase extends DatabaseMysqlBase {
	// From DatabaseBase
	protected function closeConnection() {}
	protected function doQuery( $sql ) {}

	// From DatabaseMysql
	protected function mysqlConnect( $realServer ) {}
	protected function mysqlFreeResult( $res ) {}
	protected function mysqlFetchObject( $res ) {}
	protected function mysqlFetchArray( $res ) {}
	protected function mysqlNumRows( $res ) {}
	protected function mysqlNumFields( $res ) {}
	protected function mysqlFieldName( $res, $n ) {}
	protected function mysqlDataSeek( $res, $row ) {}
	protected function mysqlError( $conn = null ) {}
	protected function mysqlFetchField( $res, $n ) {}
	protected function mysqlPing() {}

	// From interface DatabaseType
	function insertId() {}
	function lastErrno() {}
	function affectedRows() {}
	function getServerVersion() {}
}

class DatabaseMysqlBaseTest extends MediaWikiTestCase {

	/**
	 * @dataProvider provideDiapers
	 */
	function testAddIdentifierQuotes( $expected, $in ) {
		$db = new FakeDatabaseMysqlBase();
		$quoted = $db->addIdentifierQuotes( $in );
		$this->assertEquals($expected, $quoted);
	}


	/**
	 * Feeds testAddIdentifierQuotes
	 *
	 * Named per bug 20281 convention.
	 */
	function provideDiapers() {
		return array(
			// Format: expected, input
			array( '``', '' ),

			// Yeah I really hate loosely typed PHP idiocies nowadays
			array( '``', null ),

			// Dear codereviewer, guess what addIdentifierQuotes()
			// will return with thoses:
			array( '``', false ),
			array( '`1`', true ),
			array( '`Array`', array() ),
			//array( '`Object`', new stdClass() ),
			// ^ Error: Object of class stdClass could not be converted to string

			// We never know what could happen
			array( '`0`', 0 ),
			array( '`1`', 1 ),

			// Whatchout! Should probably use something more meaningful
			array( "`'`", "'" ),  # single quote
			array( '`"`', '"' ),  # double quote
			array( '````', '`' ), # backtick
			array( '`’`', '’' ),  # apostrophe (look at your encyclopedia)

			// sneaky NUL bytes are lurking everywhere
			array( '``', "\0" ),
			array( '`xyzzy`', "\0x\0y\0z\0z\0y\0" ),

			// unicode chars
			array(
				self::createUnicodeString( '`\u0001a\uFFFFb`' ),
				self::createUnicodeString( '\u0001a\uFFFFb' )
			),
			array(
				self::createUnicodeString( '`\u0001\uFFFF`' ),
				self::createUnicodeString( '\u0001\u0000\uFFFF\u0000' )
			),
			array( '`☃`', '☃' ),
			array( '`メインページ`', 'メインページ' ),
			array( '`Басты_бет`', 'Басты_бет' ),

			// Real world:
			array( '`Alix`', 'Alix' ),  # while( ! $recovered ) { sleep(); }
			array( '`Backtick: ```', 'Backtick: `' ),
			array( '`This is a test`', 'This is a test' ),
		);
	}

	private static function createUnicodeString($str) {
		return json_decode( '"' . $str . '"' );
	}

}
