<?php
class Mensaje implements JsonSerializable{
    protected $mensaje;
    protected $respuesta;

    public function __construct(){

    }

    public function getMensaje()
    {
        return $this->mensaje;
    }

    public function getRespuesta()
    {
        return $this->respuesta;
    }

    public function jsonSerialize()
    {
        return
        [
            'mensaje'   => $this->getMensaje(),
            'respuesta' => $this->getRespuesta()
        ];
    }
}
