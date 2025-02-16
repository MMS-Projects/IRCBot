<?php
class IRCBot_Types_Mask
{
    public $nickname;
    public $ident;
    public $host;
    public function fromMask($mask)
    {
        sscanf($mask, '%[^!]!%[^@]@%s', $this->nickname, $this->ident, $this->host);
    }
    public function  __toString() {
        return sprintf('%s!%s@%s', $this->nickname, $this->ident, $this->host);
    }
}
?>
