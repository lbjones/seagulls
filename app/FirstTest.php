<?php
namespace App;

use App\Http\Controllers\PhotoController;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

class FirstTest implements SnippetAcceptingContext
{
    private $fields = [];

    /**
     * @Given the user enters data
     */
    public function setItUp()
    {
        $this->fields = ['Freddy', 'Thompson', 'f@t.com', '732-338-2342'];
    }

    /**
     * @When he presses submit
     */
    public function hePressesSubmit()
    {
        $c = new PhotoController();
        $c->addToCSV($this->fields);
    }

    /**
     * @Then the data is stored
     */
    public function theDataIsStored()
    {
    }

}
