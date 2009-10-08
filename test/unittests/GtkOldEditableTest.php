<?php
// Call GtkOldEditableTest::main() if this source file is executed directly.
if (!defined("PHPUnit_MAIN_METHOD")) {
    define("PHPUnit_MAIN_METHOD", "GtkOldEditableTest::main");
}

require_once "PHPUnit/Framework/TestCase.php";
require_once "PHPUnit/Framework/TestSuite.php";

// You may remove the following line when all tests have been implemented.
require_once "PHPUnit/Framework/IncompleteTestError.php";



/**
 * Test class for GtkOldEditable.
 * Generated by PHPUnit_Util_Skeleton on 2006-03-07 at 13:26:41.
 */
class GtkOldEditableTest extends PHPUnit_Framework_TestCase {
    /**
     * Runs the test methods of this class.
     *
     * @access public
     * @static
     */
    public static function main() {
        require_once "PHPUnit/TextUI/TestRunner.php";

        $suite  = new PHPUnit_Framework_TestSuite("GtkOldEditableTest");
        $result = PHPUnit_TextUI_TestRunner::run($suite);
    }

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp() {
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown() {
    }

    /**
     * @todo Implement testChanged().
     */
    public function testChanged() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testClaim_selection().
     */
    public function testClaim_selection() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testCopy_clipboard().
     */
    public function testCopy_clipboard() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testCut_clipboard().
     */
    public function testCut_clipboard() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testDelete_selection().
     */
    public function testDelete_selection() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testDelete_text().
     */
    public function testDelete_text() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testGet_chars().
     */
    public function testGet_chars() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testGet_editable().
     */
    public function testGet_editable() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testGet_position().
     */
    public function testGet_position() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testGet_selection_bounds().
     */
    public function testGet_selection_bounds() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testInsert_text().
     */
    public function testInsert_text() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testPaste_clipboard().
     */
    public function testPaste_clipboard() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testSelect_region().
     */
    public function testSelect_region() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testSet_editable().
     */
    public function testSet_editable() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }

    /**
     * @todo Implement testSet_position().
     */
    public function testSet_position() {
        // Remove the following line when you implement this test.
        throw new PHPUnit_Framework_IncompleteTestError;
    }
}

// Call GtkOldEditableTest::main() if this source file is executed directly.
if (PHPUnit_MAIN_METHOD == "GtkOldEditableTest::main") {
    GtkOldEditableTest::main();
}
?>