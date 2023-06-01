<?php

namespace App\DTO;

use DateTime;

final class Article
{
    private ?int $id = null;
    private ?int $id_origin = null;
    private ?string $title = '';
    private ?string $menu_title = '';
    private ?string $content = '';
    private ?string $short = '';
    private ?string $url = '';
    private ?int $id_author = null;
    private ?int $id_editor = null;
    private ?DateTime $stamp = null;
    private ?DateTime $start_stamp = null;
    private ?DateTime $ending_stamp = null;
    private ?string $seo_keywords = '';
    private ?string $seo_description = '';
    private ?int $seo_index = null;
    private ?int $archive = null;
    private ?int $draft = null;
    private ?int $important = null;
    private ?int $pinned = null;
    private ?int $visited = 0;
    private ?int $preview = null;
    private ?int $id_responsible = null;
    private ?int $notListInNewest = null;
    private ?int $id_photo = null;
    private ?string $photo_path = '';
    private ?string $type = '';
    private ?DateTime $calendar_stamp = null;

    

    public function getTitle(): ?string
    {
        return $this->title;
    }
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    public function getMenuTitle()
    {
        return $this->menu_title;
    }
    public function setMenuTitle($menu_title)
    {
        $this->menu_title = $menu_title;
    }
    public function getIdOrigin()
    {
        return $this->id_origin;
    }
    public function setIdOrigin($id_origin)
    {
        $this->id_origin = $id_origin;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getShort()
    {
        return $this->short;
    }
    public function setShort($short)
    {
        $this->short = $short;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getIdAuthor()
    {
        return $this->id_author;
    }
    public function setIdAuthor($id_author)
    {
        $this->id_author = $id_author;
    }
    public function getIdEditor()
    {
        return $this->id_editor;
    }
    public function setIdEditor($id_editor)
    {
        $this->id_editor = $id_editor;
    }
    public function getStamp()
    {
        return $this->stamp;
    }
    public function setStamp($stamp)
    {
        $this->stamp = $stamp;
    }
    public function getStartStamp()
    {
        return $this->start_stamp;
    }
    public function setStartStamp($start_stamp)
    {
        $this->start_stamp = $start_stamp;
    }
    public function getEndingStamp()
    {
        return $this->ending_stamp;
    }
    public function setEndingStamp($ending_stamp)
    {
        $this->ending_stamp = $ending_stamp;
    }
    public function getSeoKeywords()
    {
        return $this->seo_keywords;
    }
    public function setSeoKeywords($seo_keywords)
    {
        $this->seo_keywords = $seo_keywords;
    }
    public function getSeoDescription()
    {
        return $this->seo_description;
    }
    public function setSeoDescription($seo_description)
    {
        $this->seo_description = $seo_description;
    }
    public function getSeoIndex()
    {
        return $this->seo_index;
    }
    public function setSeoIndex($seo_index)
    {
        $this->seo_index = $seo_index;
    }
    public function getArchive()
    {
        return $this->archive;
    }
    public function setArchive($archive)
    {
        $this->archive = $archive;
    }
    public function getDraft()
    {
        return $this->draft;
    }
    public function setDraft($draft)
    {
        $this->draft = $draft;
    }
    public function getImportant()
    {
        return $this->important;
    }
    public function setImportant($important)
    {
        $this->important = $important;
    }
    public function getPinned()
    {
        return $this->pinned;
    }
    public function setPinned($pinned)
    {
        $this->pinned = $pinned;
    }
    public function getVisited()
    {
        return $this->visited;
    }
    public function setVisited($visited)
    {
        $this->visited = $visited;
    }
    public function getPreview()
    {
        return $this->preview;
    }
    public function setPreview($preview)
    {
        $this->preview = $preview;
    }
    public function getIdResponsible()
    {
        return $this->id_responsible;
    }
    public function setIdResponsible($id_responsible)
    {
        $this->id_responsible = $id_responsible;
    }
    public function getNotListInNewest()
    {
        return $this->notListInNewest;
    }
    public function setNotListInNewest($notListInNewest)
    {
        $this->notListInNewest = $notListInNewest;
    }
    public function getIdPhoto()
    {
        return $this->id_photo;
    }
    public function setIdPhoto($id_photo)
    {
        $this->id_photo = $id_photo;
    }
    public function getPhotoPath()
    {
        return $this->photo_path;
    }
    public function setPhotoPath($photo_path)
    {
        $this->photo_path = $photo_path;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getCalendarStamp()
    {
        return $this->calendar_stamp;
    }
    public function setCalendarStamp($calendar_stamp)
    {
        $this->calendar_stamp = $calendar_stamp;
    }
}