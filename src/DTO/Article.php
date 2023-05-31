<?php

namespace App\DTO;

final class Article
{
    private $id = null;
    private $id_origin = null;
    private $title = '';
    private $menu_title = '';
    private $content = '';
    private $short = '';
    private $url = '';
    private $id_author = null;
    private $id_editor = null;
    private $stamp = null;
    private $start_stamp = null;
    private $ending_stamp = null;
    private $seo_keywords = '';
    private $seo_description = '';
    private $seo_index = false;
    private $archive = false;
    private $draft = false;
    private $important = false;
    private $pinned = false;
    private $visited = 0;
    private $preview = false;
    private $id_responsible = null;
    private $notListInNewest = false;
    private $id_photo = null;
    private $photo_path = '';
    private $type = '';
    private $calendar_stamp = null;

    public function getTitle(): ?string
    {
        return $this->title;
    }
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    public function getMenu_title()
    {
        return $this->menu_title;
    }
    public function setMenu_title($menu_title)
    {
        $this->menu_title = $menu_title;
    }
    public function getId_origin()
    {
        return $this->id_origin;
    }
    public function setId_origin($id_origin)
    {
        $this->id_origin = $id_origin;
    }
    public function getId()
    {
        return $this->id;
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
    public function getId_author()
    {
        return $this->id_author;
    }
    public function setId_author($id_author)
    {
        $this->id_author = $id_author;
    }
    public function getId_editor()
    {
        return $this->id_editor;
    }
    public function setId_editor($id_editor)
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
    public function getStart_stamp()
    {
        return $this->start_stamp;
    }
    public function setStart_stamp($start_stamp)
    {
        $this->start_stamp = $start_stamp;
    }
    public function getEnding_stamp()
    {
        return $this->ending_stamp;
    }
    public function setEnding_stamp($ending_stamp)
    {
        $this->ending_stamp = $ending_stamp;
    }
    public function getSeo_keywords()
    {
        return $this->seo_keywords;
    }
    public function setSeo_keywords($seo_keywords)
    {
        $this->seo_keywords = $seo_keywords;
    }
    public function getSeo_description()
    {
        return $this->seo_description;
    }
    public function setSeo_description($seo_description)
    {
        $this->seo_description = $seo_description;
    }
    public function getSeo_index()
    {
        return $this->seo_index;
    }
    public function setSeo_index($seo_index)
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
    public function getId_responsible()
    {
        return $this->id_responsible;
    }
    public function setId_responsible($id_responsible)
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
    public function getId_photo()
    {
        return $this->id_photo;
    }
    public function setId_photo($id_photo)
    {
        $this->id_photo = $id_photo;
    }
    public function getPhoto_path()
    {
        return $this->photo_path;
    }
    public function setPhoto_path($photo_path)
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
    public function getCalendar_stamp()
    {
        return $this->calendar_stamp;
    }
    public function setCalendar_stamp($calendar_stamp)
    {
        $this->calendar_stamp = $calendar_stamp;
    }
}