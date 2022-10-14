<?php

class AudioTrack
{
    public int $id; // unique id from the database
    public string $source_url; // URL where the data stream should come from
    public ?string $name = null;
    public ?float $length = null; // in seconds
    public ?Author $author = null;
    public ?Album $album = null;
    public ?string $lyrics = null;

    /**
     * begins streaming the data
     */
    public function startStream()
    {
    }

    /**
     * stops data streaming
     */
    public function stopStream()
    {
    }

    /**
     * save information about this object
     * into the database
     */
    public function save(): int
    {
        return 123; // returns a unique ID number that was given to us
        // by the database when we inserted the record
    }

    /**
     * deletes the record from the database
     */
    public function delete()
    {
        //
    }

    /**
     * returns length in M:s format
     */
    public function getLengthHumanReadable(): string
    {
        return floor($this->length / 60) . ':' . $this->length % 60;
    }

    /**
     * returns the name of the author
     */
    public function getAuthorName(): string
    {
        // if there is a name property in the Author class
        return $this->author->name;
    }

    /**
     * adds this track to an Album at a given position
     */
    public function addToAlbum(Album $album, int $position)
    {
        $this->album = $album;
    }
}
