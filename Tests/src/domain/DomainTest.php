<?php

namespace Resellerclub;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-10-15 at 04:24:44.
 */
class DomainTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var Domain
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp() {
    $mock = $this->getMock('\Resellerclub\Domain', array('callApi'));
    $mock->method('callApi')->willReturn('foo');
    $this->object = $mock;
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown() {
    
  }

  /**
   * @covers \Resellerclub\Domain::checkAvailability
   * @todo   Implement testCheckAvailability().
   */
  public function testCheckAvailability() {
    $domainName = 'justrandomdomain';
    $tlds = array('com', 'net');
    $this->object->checkAvailability($domainName, $tlds, FALSE);
  }

  /**
   * @covers \Resellerclub\Domain::checkAvailabilityIdn
   * @todo   Implement testCheckAvailabilityIdn().
   */
  public function testCheckAvailabilityIdn() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::checkAvailabilityPremium
   * @todo   Implement testCheckAvailabilityPremium().
   */
  public function testCheckAvailabilityPremium() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::domainSuggestions
   * @todo   Implement testDomainSuggestions().
   */
  public function testDomainSuggestions() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::register
   * @todo   Implement testRegister().
   */
  public function testRegister() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::transfer
   * @todo   Implement testTransfer().
   */
  public function testTransfer() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::submitAuthCode
   * @todo   Implement testSubmitAuthCode().
   */
  public function testSubmitAuthCode() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::validateTransfer
   * @todo   Implement testValidateTransfer().
   */
  public function testValidateTransfer() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::renew
   * @todo   Implement testRenew().
   */
  public function testRenew() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::searchDomain
   * @todo   Implement testSearchDomain().
   */
  public function testSearchDomain() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::getDefaultNameServer
   * @todo   Implement testGetDefaultNameServer().
   */
  public function testGetDefaultNameServer() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::getOrderId
   * @todo   Implement testGetOrderId().
   */
  public function testGetOrderId() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::getDomainDetailsByOrderId
   * @todo   Implement testGetDomainDetailsByOrderId().
   */
  public function testGetDomainDetailsByOrderId() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::getDomainDetailsByDomain
   * @todo   Implement testGetDomainDetailsByDomain().
   */
  public function testGetDomainDetailsByDomain() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::setNameServer
   * @todo   Implement testSetNameServer().
   */
  public function testSetNameServer() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::setChildNameServer
   * @todo   Implement testSetChildNameServer().
   */
  public function testSetChildNameServer() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::modifyChildNameServerHost
   * @todo   Implement testModifyChildNameServerHost().
   */
  public function testModifyChildNameServerHost() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::modifyChildNameServerIp
   * @todo   Implement testModifyChildNameServerIp().
   */
  public function testModifyChildNameServerIp() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::deleteChildNameServer
   * @todo   Implement testDeleteChildNameServer().
   */
  public function testDeleteChildNameServer() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::modifyDomainContacts
   * @todo   Implement testModifyDomainContacts().
   */
  public function testModifyDomainContacts() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::addPrivacyProtection
   * @todo   Implement testAddPrivacyProtection().
   */
  public function testAddPrivacyProtection() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::modifyPrivacyProtection
   * @todo   Implement testModifyPrivacyProtection().
   */
  public function testModifyPrivacyProtection() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::modifyAuthCode
   * @todo   Implement testModifyAuthCode().
   */
  public function testModifyAuthCode() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::modifyTheftProtection
   * @todo   Implement testModifyTheftProtection().
   */
  public function testModifyTheftProtection() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::suspendDomain
   * @todo   Implement testSuspendDomain().
   */
  public function testSuspendDomain() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::unsuspendDomain
   * @todo   Implement testUnsuspendDomain().
   */
  public function testUnsuspendDomain() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::deleteDomain
   * @todo   Implement testDeleteDomain().
   */
  public function testDeleteDomain() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \Resellerclub\Domain::restoreDomain
   * @todo   Implement testRestoreDomain().
   */
  public function testRestoreDomain() {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
        'This test has not been implemented yet.'
    );
  }

}
