### STRATEGY
Define algorithms family, incapsulates every one and provide their permutability. Allows to modify algorithms independently from
their usage on client side.

#### Example
We have base car class and child classes that define specific cars. We also know that all cars will have different types of fueling.
We can use inheritance for this case, but there is a better way, check pattern and antipattern. 