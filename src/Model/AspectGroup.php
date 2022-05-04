<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

class AspectGroup extends AbstractModel
{
    /**
     * An array of the name/value pairs for the aspects of the product. For example:
     * BRAND/Apple.
     *
     * @var \Ebay\Buy\Browse\Model\Aspect[]
     */
    public $aspects = null;

    /**
     * The name of a group of aspects. <br /><br />In the following example, <b>
     * Product Identifiers</b> and <b> Process</b> are product aspect group names.
     * Under the group name are the product aspect name/value pairs. <p><b> Product
     * Identifiers</b> <br />&nbsp;&nbsp;&nbsp;Brand/Apple <br
     * />&nbsp;&nbsp;&nbsp;Product Family/iMac</p> <p><b> Processor</b><br
     * />&nbsp;&nbsp;&nbsp;Processor Type/Intel <br />&nbsp;&nbsp;&nbsp;Processor
     * Speed/3.10</p>.
     *
     * @var string
     */
    public $localizedGroupName = null;
}
