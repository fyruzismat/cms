<?php

namespace App\Filament\Resources\ActivityResource\RelationManagers;

use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttendancesRelationManager extends RelationManager
{
    protected static string $relationship = 'attendances';

    protected static ?string $recordTitleAttribute = 'student_id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Section::make('Attendance')
                //     ->schema(function ($component, ?Model $record) {
                //         // Looping for all products
                //         $students = Student::where('club_id', $record->club->id)->get();

                //         $array = [];
                //         foreach ($students as $index => $student) {
                //             $array[] = Fieldset::make($student->name)
                //                 ->schema([
                //                     Toggle::make('status')->label('Attend'),
                //                 ]);
                //         }
                //         return $array;
                //     }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student_id'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
