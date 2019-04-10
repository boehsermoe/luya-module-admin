<?php

namespace admintests\admin\helpers;

use admintests\AdminTestCase;
use luya\admin\helpers\Angular;

class AngularTest extends AdminTestCase
{
    public function testDirective()
    {
        $this->assertSame('<foo-bar attr="value"></foo-bar>', Angular::directive('foo-bar', ['attr' => 'value']));
        $this->assertSame('<foo-bar attr="value"></foo-bar>', Angular::directive('FooBar', ['attr' => 'value']));
    }

    public function testTextDirective()
    {
        $this->assertSame('<zaa-text model="the-model" label="the-label" options=\'[]\' fieldid="the-model-zaa-text" fieldname="the-model"></zaa-text>', Angular::text('the-model', 'the-label')->render());
        $this->assertSame('<zaa-text classAttr="value" model="the-model" label="the-label" options=\'[]\' fieldid="the-model-zaa-text" fieldname="the-model"></zaa-text>', Angular::text('the-model', 'the-label', ['classAttr' => 'value'])->render());
    }

    public function testSortRelationArrayDirective()
    {
        $this->assertSame('<zaa-sort-relation-array model="the-model" label="the-label" options=\'{"sourceData":{"foo":"bar"}}\' fieldid="the-model-zaa-sort-relation-array" fieldname="the-model"></zaa-sort-relation-array>', Angular::sortRelationArray('the-model', 'the-label', ['foo' => 'bar'])->render());
        $this->assertSame('<zaa-sort-relation-array classAtr="value" model="the-model" label="the-label" options=\'{"sourceData":{"foo":"bar"}}\' fieldid="the-model-zaa-sort-relation-array" fieldname="the-model"></zaa-sort-relation-array>', Angular::sortRelationArray('the-model', 'the-label', ['foo' => 'bar'], ['classAtr' => 'value'])->render());
    }
}
