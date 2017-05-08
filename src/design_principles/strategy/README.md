### STRATEGY
- Determine dynamic parts of application(class) and separate it from constant parts.
- Programm on interface level and not on implementation level.
- Choose composition where it possible and not inheritance 
  Composition means that every child class have instances of behaviours classes. Behaviour is not inherited but provided by correct picking
  of an object.

All of this helps to build low coupled code and reuse existing code many times. It reduces time for development when system is growing and requiring
more and more maintainance.