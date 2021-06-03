<?php
namespace App\Model\Dto\Mail;


use App\Model\Dto\Attachment\AttachmentDetailDto;

class MailResponseDto
{
    private $id;
    private $type;
    private $status;
    private $from_name;
    private $from_email;
    private $address1;
    private $address2;
    private $city;
    private $zipcode;
    private $to_name;
    private $to_firstname;
    private $to_lastname;
    private $to_company;
    private $to_email;
    private $dest_statut;
    private $id_sender;
    private $id_creator;
    private $price_ht;
    private $ref_dossier;
    private $ref_client;
    private $ref_facturation;
    private $date;
    private $full_hash_sha256;
    private $send_fail;
    private $is_eidas;
    private $proof_ev_url;
    private $ts_ev_date;
    private $proof_ar_url;
    private $view_date;
    private $proof_ng_url;
    private $negligence_date;
    private $proof_rf_url;
    private $refused_date;
    private $pdf_content;
    private $zip;
    private $req_notify_ev;
    private $req_notify_ar;
    private $req_notify_rf;
    private $req_notify_ng;
    private $attachments;
    private $attachments_details;

    /**
     * MailResponseDto constructor.
     */
    public function __construct()
    {
        $this->attachments = [];
        $this->attachments_details = [];
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getFromName()
    {
        return $this->from_name;
    }

    /**
     * @param mixed $from_name
     */
    public function setFromName($from_name): void
    {
        $this->from_name = $from_name;
    }

    /**
     * @return mixed
     */
    public function getFromEmail()
    {
        return $this->from_email;
    }

    /**
     * @param mixed $from_email
     */
    public function setFromEmail($from_email): void
    {
        $this->from_email = $from_email;
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
    public function getToName()
    {
        return $this->to_name;
    }

    /**
     * @param mixed $to_name
     */
    public function setToName($to_name): void
    {
        $this->to_name = $to_name;
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
    public function getIdSender()
    {
        return $this->id_sender;
    }

    /**
     * @param mixed $id_sender
     */
    public function setIdSender($id_sender): void
    {
        $this->id_sender = $id_sender;
    }

    /**
     * @return mixed
     */
    public function getIdCreator()
    {
        return $this->id_creator;
    }

    /**
     * @param mixed $id_creator
     */
    public function setIdCreator($id_creator): void
    {
        $this->id_creator = $id_creator;
    }

    /**
     * @return mixed
     */
    public function getPriceHt()
    {
        return $this->price_ht;
    }

    /**
     * @param mixed $price_ht
     */
    public function setPriceHt($price_ht): void
    {
        $this->price_ht = $price_ht;
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

    /**
     * @return mixed
     */
    public function getFullHashSha256()
    {
        return $this->full_hash_sha256;
    }

    /**
     * @param mixed $full_hash_sha256
     */
    public function setFullHashSha256($full_hash_sha256): void
    {
        $this->full_hash_sha256 = $full_hash_sha256;
    }

    /**
     * @return mixed
     */
    public function getSendFail()
    {
        return $this->send_fail;
    }

    /**
     * @param mixed $send_fail
     */
    public function setSendFail($send_fail): void
    {
        $this->send_fail = $send_fail;
    }

    /**
     * @return mixed
     */
    public function getisEidas()
    {
        return $this->is_eidas;
    }

    /**
     * @param mixed $is_eidas
     */
    public function setIsEidas($is_eidas): void
    {
        $this->is_eidas = $is_eidas;
    }

    /**
     * @return mixed
     */
    public function getProofEvUrl()
    {
        return $this->proof_ev_url;
    }

    /**
     * @param mixed $proof_ev_url
     */
    public function setProofEvUrl($proof_ev_url): void
    {
        $this->proof_ev_url = $proof_ev_url;
    }

    /**
     * @return mixed
     */
    public function getTsEvDate()
    {
        return $this->ts_ev_date;
    }

    /**
     * @param mixed $ts_ev_date
     */
    public function setTsEvDate($ts_ev_date): void
    {
        $this->ts_ev_date = $ts_ev_date;
    }

    /**
     * @return mixed
     */
    public function getProofArUrl()
    {
        return $this->proof_ar_url;
    }

    /**
     * @param mixed $proof_ar_url
     */
    public function setProofArUrl($proof_ar_url): void
    {
        $this->proof_ar_url = $proof_ar_url;
    }

    /**
     * @return mixed
     */
    public function getViewDate()
    {
        return $this->view_date;
    }

    /**
     * @param mixed $view_date
     */
    public function setViewDate($view_date): void
    {
        $this->view_date = $view_date;
    }

    /**
     * @return mixed
     */
    public function getProofNgUrl()
    {
        return $this->proof_ng_url;
    }

    /**
     * @param mixed $proof_ng_url
     */
    public function setProofNgUrl($proof_ng_url): void
    {
        $this->proof_ng_url = $proof_ng_url;
    }

    /**
     * @return mixed
     */
    public function getNegligenceDate()
    {
        return $this->negligence_date;
    }

    /**
     * @param mixed $negligence_date
     */
    public function setNegligenceDate($negligence_date): void
    {
        $this->negligence_date = $negligence_date;
    }

    /**
     * @return mixed
     */
    public function getProofRfUrl()
    {
        return $this->proof_rf_url;
    }

    /**
     * @param mixed $proof_rf_url
     */
    public function setProofRfUrl($proof_rf_url): void
    {
        $this->proof_rf_url = $proof_rf_url;
    }

    /**
     * @return mixed
     */
    public function getRefusedDate()
    {
        return $this->refused_date;
    }

    /**
     * @param mixed $refused_date
     */
    public function setRefusedDate($refused_date): void
    {
        $this->refused_date = $refused_date;
    }

    /**
     * @return mixed
     */
    public function getPdfContent()
    {
        return $this->pdf_content;
    }

    /**
     * @param mixed $pdf_content
     */
    public function setPdfContent($pdf_content): void
    {
        $this->pdf_content = $pdf_content;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $zip
     */
    public function setZip($zip): void
    {
        $this->zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getReqNotifyEv()
    {
        return $this->req_notify_ev;
    }

    /**
     * @param mixed $req_notify_ev
     */
    public function setReqNotifyEv($req_notify_ev): void
    {
        $this->req_notify_ev = $req_notify_ev;
    }

    /**
     * @return mixed
     */
    public function getReqNotifyAr()
    {
        return $this->req_notify_ar;
    }

    /**
     * @param mixed $req_notify_ar
     */
    public function setReqNotifyAr($req_notify_ar): void
    {
        $this->req_notify_ar = $req_notify_ar;
    }

    /**
     * @return mixed
     */
    public function getReqNotifyRf()
    {
        return $this->req_notify_rf;
    }

    /**
     * @param mixed $req_notify_rf
     */
    public function setReqNotifyRf($req_notify_rf): void
    {
        $this->req_notify_rf = $req_notify_rf;
    }

    /**
     * @return mixed
     */
    public function getReqNotifyNg()
    {
        return $this->req_notify_ng;
    }

    /**
     * @param mixed $req_notify_ng
     */
    public function setReqNotifyNg($req_notify_ng): void
    {
        $this->req_notify_ng = $req_notify_ng;
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

    public function addAttachment($attachmentId): void
    {
        $this->attachments[] = $attachmentId;
    }

    /**
     * @return mixed
     */
    public function getAttachmentsDetails()
    {
        return $this->attachments_details;
    }

    /**
     * @param mixed $attachments_details
     */
    public function setAttachmentsDetails($attachments_details): void
    {
        $this->attachments_details = $attachments_details;
    }

    public function addAttachmentsDetail(AttachmentDetailDto $attachments_detail): void
    {
        $this->attachments_details[] = $attachments_detail;
    }
}