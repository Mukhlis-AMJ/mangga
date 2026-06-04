<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <flux:table>
        <flux:heading size="xl" class="text-zinc-900 dark:text-white">Categories</flux:heading>
        <flux:table.columns>
            <flux:table.column>Name Book</flux:table.column>
            <flux:table.column>Date</flux:table.column>
            <flux:table.column>Status</flux:table.column>
            <flux:table.column>Amount</flux:table.column>
            <flux:table.column>Genre</flux:table.column>
        </flux:table.columns>

    <flux:table.rows>
        <flux:table.row>
            <flux:table.cell>Flora & Fauna</flux:table.cell>
            <flux:table.cell>Jul 29, 10:45 AM</flux:table.cell>
            <flux:table.cell><flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge></flux:table.cell>
            <flux:table.cell variant="strong">$49.00</flux:table.cell>
            <flux:table.cell><flux:badge color="blue" size="sm" inset="top bottom">Action</flux:badge></flux:table.cell>
        </flux:table.row>

        <flux:table.row>
            <flux:table.cell>One Piece</flux:table.cell>
            <flux:table.cell>Jul 28, 2:15 PM</flux:table.cell>
            <flux:table.cell><flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge></flux:table.cell>
            <flux:table.cell variant="strong">$312.00</flux:table.cell>
            <flux:table.cell><flux:badge color="blue" size="sm" inset="top bottom">Fantasi</flux:badge></flux:table.cell>
        </flux:table.row>

        <flux:table.row>
            <flux:table.cell>Unnamed Memorie's</flux:table.cell>
            <flux:table.cell>Jul 30, 4:05 PM</flux:table.cell>
            <flux:table.cell><flux:badge color="zinc" size="sm" inset="top bottom">Refunded</flux:badge></flux:table.cell>
            <flux:table.cell variant="strong">$132.00</flux:table.cell>
            <flux:table.cell><flux:badge color="blue" size="sm" inset="top bottom">Romance</flux:badge></flux:table.cell>
        </flux:table.row>

        <flux:table.row>
            <flux:table.cell>Laptop Si Unyil</flux:table.cell>
            <flux:table.cell>Jul 27, 9:30 AM</flux:table.cell>
            <flux:table.cell><flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge></flux:table.cell>
            <flux:table.cell variant="strong">$31.00</flux:table.cell>
            <flux:table.cell><flux:badge color="blue" size="sm" inset="top bottom">Horror</flux:badge></flux:table.cell>
        </flux:table.row>
        
        <flux:table.row>
            <flux:table.cell>Bolang</flux:table.cell>
            <flux:table.cell>Mei 15, 7:35 AM</flux:table.cell>
            <flux:table.cell><flux:badge color="yellow" size="sm" inset="top bottom">Done</flux:badge></flux:table.cell>
            <flux:table.cell variant="strong">$31.00</flux:table.cell>
            <flux:table.cell><flux:badge color="blue" size="sm" inset="top bottom">Comedy</flux:badge></flux:table.cell>
        </flux:table.row>
    </flux:table.rows>
</flux:table>
<flux:button>➕Add</flux:button>
</div>