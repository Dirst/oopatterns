### DESIGN PRINCIPLES.
1. Determine dynamic parts of application(class) and separate it from constant parts.
2. Programm on interface level and not on implementation level.
3. Choose composition where it possible and not inheritance.
  Composition means that child class have instances of behaviours classes in it members. 
  Behaviour is not inherited but provided by correct picking of an object in the class member.
4. Aim to low coupling of interacted objects.
5. Classes should be opened for extension, but closed for modifications. 
  This should be implemented only in some cases to avoid complexity of architecture.
  To save a balance between extendability, efficiency and complexity Follow this principle with components 
  that most probably will be changed in the future.

All of this helps to build low coupled code and reuse existing code many times. 
It reduces time for development when system is growing and requiring more and more maintainance.
