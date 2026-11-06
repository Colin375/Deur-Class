<?php

class Deur {

    // Fields (eigenschappen)
    private bool $opSlot;
    private bool $deuropening;
    public string $deurNaam;

    // Constructor
    public function __construct(string $deurNaam)
    {
        $this->opSlot = true;        // De deur is op slot en moet worden geopend met een sleutel
        $this->deuropening = false;  // De deur is dicht en moet met de klink worden opengemaakt
        $this->deurNaam = $deurNaam; // De deur krijgt de opgegeven naam
    }

    // Functions (handelingen)
    public function sleutelGebruiken(string $richting)
    {
        switch ($richting) {
            case "links":
                // ontgrendelen
                if (!$this->opSlot) {
                    return "Deur is al ontgrendeld";
                }
                $this->opSlot = false;
                return "Deur is ontgrendeld";

            case "rechts":
                // vergrendelen
                if ($this->opSlot) {
                    return $this->deurNaam . " is nog op slot";
                }
                if ($this->deuropening) {
                    return "Je kunt een open deur niet op slot doen";
                }
                $this->opSlot = true;
                return "Deur is vergrendeld";

            default:
                // Een sleutel kun je alleen naar links of rechts draaien
                return "De sleutel kun je alleen naar links of rechts draaien";
        }
    }

    public function deurOpenen()
    {
        // Niet mogelijk als de deur op slot is!
        if ($this->opSlot) {
            return "Deur is nog op slot en kan niet open";
        }
        if ($this->deuropening) {
            return "Deur is al open";
        }
        $this->deuropening = true;
        return "Deur is geopend!";
    }

    public function doorDeurLopen()
    {
        // Alleen wanneer de deur ontgrendeld en open is, kun je door de deur lopen.
        if (!$this->opSlot && $this->deuropening) {
            return "Je bent in je huiskamer!";
        }
        return "Je stoot tegen de " . $this->deurNaam . "!";
    }

}

?>