In this case `FuelingInterface` can be replaced with abstract class. It doesn't matter.
Main point is that we separate Fueling behaviour from Car base class and place it as a bunch of classes - `DieselFueling, GasFueling`.
Now we can use this classes in children Cars classes when it needs to be. And what s important too, we can change Fueling behaviour during runtime
