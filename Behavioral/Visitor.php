<?php

namespace LuigiG34\Behavioral;

interface Shape
{
    public function accept(ShapeVisitor $visitor): void;
}

class Circle implements Shape
{
    public function accept(ShapeVisitor $visitor): void
    {
        $visitor->visitCircle($this);
    }

    public function radius(): int
    {
        return 5;
    }
}

class Square implements Shape
{
    public function accept(ShapeVisitor $visitor): void
    {
        $visitor->visitSquare($this);
    }

    public function side(): int
    {
        return 4;
    }
}


interface ShapeVisitor
{
    public function visitCircle(Circle $circle): void;
    public function visitSquare(Square $square): void;
}

class DrawVisitor implements ShapeVisitor
{
    public function visitCircle(Circle $circle): void
    {
        echo "Drawing a circle with radius {$circle->radius()}\n";
    }

    public function visitSquare(Square $square): void
    {
        echo "Drawing a square with side {$square->side()}\n";
    }
}

class AreaVisitor implements ShapeVisitor
{
    public function visitCircle(Circle $circle): void
    {
        $area = pi() * pow($circle->radius(), 2);
        echo "Area of circle: $area\n";
    }

    public function visitSquare(Square $square): void
    {
        $area = pow($square->side(), 2);
        echo "Area of square: $area\n";
    }
}


/**
 * @example Exemple d'utilisation du Pattern Visitor
 */
$shapes = [new Circle(), new Square()];

echo "--- Drawing shapes ---\n";
$drawVisitor = new DrawVisitor();
foreach ($shapes as $shape) {
    $shape->accept($drawVisitor);
}

echo "\n--- Calculating areas ---\n";
$areaVisitor = new AreaVisitor();
foreach ($shapes as $shape) {
    $shape->accept($areaVisitor);
}