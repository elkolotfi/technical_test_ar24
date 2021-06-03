<?php
namespace App\Model\Dto\User;

class UserDto
{
    private $firstname;
    private $lastname;
    private $email;
    private $gender;
    private $statut;
    private $company;
    private $company_siret;
    private $company_tva;
    private $country;
    private $address1;
    private $address2;
    private $zipcode;
    private $city;
    private $notif_billing;
    private $billing_email;
    private $confirmed;
    private $cgu;
    private $notify_ev;
    private $notify_ar;
    private $notify_rf;
    private $notify_ng;
    private $notify_consent;
    private $notify_eidas_to_valid;
    private $notify_recipient_update;
    private $notify_waiting_ar_answer;
    private $is_legal_entity;

    public function toArray() {
        $fields = [];

        $class = "\0".self::class."\0";
        $arr = (array) $this;
        foreach($arr as $k => $v) {
            if ($v !== null) {
                $fields[str_replace($class, '', $k)] = $v;
            }
        }

        return $fields;
    }
    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut): void
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company): void
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getCompanySiret()
    {
        return $this->company_siret;
    }

    /**
     * @param mixed $company_siret
     */
    public function setCompanySiret($company_siret): void
    {
        $this->company_siret = $company_siret;
    }

    /**
     * @return mixed
     */
    public function getCompanyTva()
    {
        return $this->company_tva;
    }

    /**
     * @param mixed $company_tva
     */
    public function setCompanyTva($company_tva): void
    {
        $this->company_tva = $company_tva;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param mixed $address1
     */
    public function setAddress1($address1): void
    {
        $this->address1 = $address1;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param mixed $address2
     */
    public function setAddress2($address2): void
    {
        $this->address2 = $address2;
    }

    /**
     * @return mixed
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param mixed $zipcode
     */
    public function setZipcode($zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getNotifBilling()
    {
        return $this->notif_billing;
    }

    /**
     * @param mixed $notif_billing
     */
    public function setNotifBilling($notif_billing): void
    {
        $this->notif_billing = $notif_billing;
    }

    /**
     * @return mixed
     */
    public function getBillingEmail()
    {
        return $this->billing_email;
    }

    /**
     * @param mixed $billing_email
     */
    public function setBillingEmail($billing_email): void
    {
        $this->billing_email = $billing_email;
    }

    /**
     * @return mixed
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * @param mixed $confirmed
     */
    public function setConfirmed($confirmed): void
    {
        $this->confirmed = $confirmed;
    }

    /**
     * @return mixed
     */
    public function getCgu()
    {
        return $this->cgu;
    }

    /**
     * @param mixed $cgu
     */
    public function setCgu($cgu): void
    {
        $this->cgu = $cgu;
    }

    /**
     * @return mixed
     */
    public function getNotifyEv()
    {
        return $this->notify_ev;
    }

    /**
     * @param mixed $notify_ev
     */
    public function setNotifyEv($notify_ev): void
    {
        $this->notify_ev = $notify_ev;
    }

    /**
     * @return mixed
     */
    public function getNotifyAr()
    {
        return $this->notify_ar;
    }

    /**
     * @param mixed $notify_ar
     */
    public function setNotifyAr($notify_ar): void
    {
        $this->notify_ar = $notify_ar;
    }

    /**
     * @return mixed
     */
    public function getNotifyRf()
    {
        return $this->notify_rf;
    }

    /**
     * @param mixed $notify_rf
     */
    public function setNotifyRf($notify_rf): void
    {
        $this->notify_rf = $notify_rf;
    }

    /**
     * @return mixed
     */
    public function getNotifyNg()
    {
        return $this->notify_ng;
    }

    /**
     * @param mixed $notify_ng
     */
    public function setNotifyNg($notify_ng): void
    {
        $this->notify_ng = $notify_ng;
    }

    /**
     * @return mixed
     */
    public function getNotifyConsent()
    {
        return $this->notify_consent;
    }

    /**
     * @param mixed $notify_consent
     */
    public function setNotifyConsent($notify_consent): void
    {
        $this->notify_consent = $notify_consent;
    }

    /**
     * @return mixed
     */
    public function getNotifyEidasToValid()
    {
        return $this->notify_eidas_to_valid;
    }

    /**
     * @param mixed $notify_eidas_to_valid
     */
    public function setNotifyEidasToValid($notify_eidas_to_valid): void
    {
        $this->notify_eidas_to_valid = $notify_eidas_to_valid;
    }

    /**
     * @return mixed
     */
    public function getNotifyRecipientUpdate()
    {
        return $this->notify_recipient_update;
    }

    /**
     * @param mixed $notify_recipient_update
     */
    public function setNotifyRecipientUpdate($notify_recipient_update): void
    {
        $this->notify_recipient_update = $notify_recipient_update;
    }

    /**
     * @return mixed
     */
    public function getNotifyWaitingArAnswer()
    {
        return $this->notify_waiting_ar_answer;
    }

    /**
     * @param mixed $notify_waiting_ar_answer
     */
    public function setNotifyWaitingArAnswer($notify_waiting_ar_answer): void
    {
        $this->notify_waiting_ar_answer = $notify_waiting_ar_answer;
    }

    /**
     * @return mixed
     */
    public function getisLegalEntity()
    {
        return $this->is_legal_entity;
    }

    /**
     * @param mixed $is_legal_entity
     */
    public function setIsLegalEntity($is_legal_entity): void
    {
        $this->is_legal_entity = $is_legal_entity;
    }


}