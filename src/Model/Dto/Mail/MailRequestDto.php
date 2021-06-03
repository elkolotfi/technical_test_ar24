<?php
namespace App\Model\Dto\Mail;


class MailRequestDto
{
    private $id_user; // required
    private $edias;
    private $custom_name_sender;
    private $to_lastname; // required
    private $to_firstname; // required
    private $to_company;
    private $to_email; // required
    private $dest_statut; // required
    private $content;
    private $ref_dossier;
    private $ref_client;
    private $ref_facturation;
    private $attachments;
    private $payment_slug;
    private $webhook;
    private $otp;
    private $auth_otp_hash;
    private $id_group;
    private $pre_notif;

    public function toArray() {
        $fields = [];

        $class = "\0".self::class."\0";
        $arr = (array) $this;
        foreach($arr as $k => $v) {
            if ($v !== null) {
                $key = str_replace($class, '', $k);
                if ($key === 'attachments') {
                    $attachments = $v;
                    if (is_array($attachments) && !empty($attachments)) {
                        foreach ($attachments as $i => $attachment) {
                            $fields["attachment[$i]"] = $attachment;
                        }
                    }
                } else {
                    $fields[$key] = $v;
                }
            }
        }

        return $fields;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getEdias()
    {
        return $this->edias;
    }

    /**
     * @param mixed $edias
     */
    public function setEdias($edias): void
    {
        $this->edias = $edias;
    }

    /**
     * @return mixed
     */
    public function getCustomNameSender()
    {
        return $this->custom_name_sender;
    }

    /**
     * @param mixed $custom_name_sender
     */
    public function setCustomNameSender($custom_name_sender): void
    {
        $this->custom_name_sender = $custom_name_sender;
    }

    /**
     * @return mixed
     */
    public function getToLastname()
    {
        return $this->to_lastname;
    }

    /**
     * @param mixed $to_lastname
     */
    public function setToLastname($to_lastname): void
    {
        $this->to_lastname = $to_lastname;
    }

    /**
     * @return mixed
     */
    public function getToFirstname()
    {
        return $this->to_firstname;
    }

    /**
     * @param mixed $to_firstname
     */
    public function setToFirstname($to_firstname): void
    {
        $this->to_firstname = $to_firstname;
    }

    /**
     * @return mixed
     */
    public function getToCompany()
    {
        return $this->to_company;
    }

    /**
     * @param mixed $to_company
     */
    public function setToCompany($to_company): void
    {
        $this->to_company = $to_company;
    }

    /**
     * @return mixed
     */
    public function getToEmail()
    {
        return $this->to_email;
    }

    /**
     * @param mixed $to_email
     */
    public function setToEmail($to_email): void
    {
        $this->to_email = $to_email;
    }

    /**
     * @return mixed
     */
    public function getDestStatut()
    {
        return $this->dest_statut;
    }

    /**
     * @param mixed $dest_statut
     */
    public function setDestStatut($dest_statut): void
    {
        $this->dest_statut = $dest_statut;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getRefDossier()
    {
        return $this->ref_dossier;
    }

    /**
     * @param mixed $ref_dossier
     */
    public function setRefDossier($ref_dossier): void
    {
        $this->ref_dossier = $ref_dossier;
    }

    /**
     * @return mixed
     */
    public function getRefClient()
    {
        return $this->ref_client;
    }

    /**
     * @param mixed $ref_client
     */
    public function setRefClient($ref_client): void
    {
        $this->ref_client = $ref_client;
    }

    /**
     * @return mixed
     */
    public function getRefFacturation()
    {
        return $this->ref_facturation;
    }

    /**
     * @param mixed $ref_facturation
     */
    public function setRefFacturation($ref_facturation): void
    {
        $this->ref_facturation = $ref_facturation;
    }

    /**
     * @return mixed
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param mixed $attachments
     */
    public function setAttachments($attachments): void
    {
        $this->attachments = $attachments;
    }

    /**
     * @return mixed
     */
    public function getPaymentSlug()
    {
        return $this->payment_slug;
    }

    /**
     * @param mixed $payment_slug
     */
    public function setPaymentSlug($payment_slug): void
    {
        $this->payment_slug = $payment_slug;
    }

    /**
     * @return mixed
     */
    public function getWebhook()
    {
        return $this->webhook;
    }

    /**
     * @param mixed $webhook
     */
    public function setWebhook($webhook): void
    {
        $this->webhook = $webhook;
    }

    /**
     * @return mixed
     */
    public function getOtp()
    {
        return $this->otp;
    }

    /**
     * @param mixed $otp
     */
    public function setOtp($otp): void
    {
        $this->otp = $otp;
    }

    /**
     * @return mixed
     */
    public function getAuthOtpHash()
    {
        return $this->auth_otp_hash;
    }

    /**
     * @param mixed $auth_otp_hash
     */
    public function setAuthOtpHash($auth_otp_hash): void
    {
        $this->auth_otp_hash = $auth_otp_hash;
    }

    /**
     * @return mixed
     */
    public function getIdGroup()
    {
        return $this->id_group;
    }

    /**
     * @param mixed $id_group
     */
    public function setIdGroup($id_group): void
    {
        $this->id_group = $id_group;
    }

    /**
     * @return mixed
     */
    public function getPreNotif()
    {
        return $this->pre_notif;
    }

    /**
     * @param mixed $pre_notif
     */
    public function setPreNotif($pre_notif): void
    {
        $this->pre_notif = $pre_notif;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token): void
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }
}