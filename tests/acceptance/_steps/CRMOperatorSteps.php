<?php
namespace AcceptanceTester;

class CRMOperatorSteps extends \AcceptanceTester
{
	function amInAddCustomerUi()
	{
		$I = $this;
		$I->amOnPage('/customer/add');
	}
	
	public function imagineCustomer()
	{
		$faker = \Faker\Factory::create();
		return [
				'CustomerRecord[name]'			=>	$faker->name,
				'CustomerRecord[birth_date]'	=>	$faker->date('Y-m-d'),
				'CustomerRecord[notes]'			=>	$faker->sentence(8),
				'PhoneRecord[nnumber]'			=>	$faker->phoneNumber								
		];
	}
	
	function fillCustomerDataForm($fieldsData)
	{
		$I = $this;
		foreach ($fieldsData as $key => $value) {
			$I->fillField($key, $value);
		}
	}

	function submitCustomerDataForm()
	{
		$I = $this;
		$I->click('Submit');
	}
	
	public function seeIAmInListCustomersUi()
	{
		$I = $this;
		$I->seeCurrentUrlMatches('/customers/');
	}
	
	function amInListCustomersUi()
	{
		$I = $this;
		$I->amOnPage('/customers');
	}	
}