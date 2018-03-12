
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
i
t
_
i
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
i
t
_
l
i
n
e
i
t
e
m
(
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
_
i
n
v
o
i
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
t
u
s
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
a
i
s
e
d
_
d
a
t
e
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
u
e
_
d
a
t
e
 
=
 
$
t
h
i
s
-
>
r
a
i
s
e
d
_
d
a
t
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
i
d
 
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
i
t
_
t
o
t
a
l
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
'
G
B
P
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
 
=
 
f
a
l
s
e
;
 
/
/
 
I
f
 
t
h
e
 
s
e
l
l
e
r
 
i
s
n
'
t
 
i
n
 
t
h
e
 
E
U
 
t
h
e
n
 
w
e
'
l
l
 
i
g
n
o
r
e
 
t
h
e
 
V
A
T
 
q
u
e
s
t
i
o
n
 
a
n
d
 
j
u
s
t
 
c
h
a
r
g
e
 
t
a
x
 
a
n
y
w
a
y
.

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
 
=
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
n
i
t
_
l
i
n
e
i
t
e
m
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
d
'
]
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
n
a
m
e
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
p
r
i
c
e
'
]
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
q
t
y
'
]
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
]
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
t
o
t
a
l
'
]
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
]
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
c
o
d
e
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
r
a
t
e
 
'
]
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
v
_
i
d
'
]
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
s
_
p
a
y
m
e
n
t
'
]
 
=
 
0
;

	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
]
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
]
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
]
 
=
 
'
'
;

	
	

 
 
 
 
}


 
 
 
 
/
/
C
r
e
a
t
e
 
a
 
n
e
w
 
i
n
v
o
i
c
e

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
_
n
e
w
_
i
n
v
o
i
c
e
(
$
i
n
v
o
i
c
e
_
d
a
t
a
,
 
$
l
i
n
e
_
i
t
e
m
s
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
l
i
n
e
_
i
t
e
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
N
o
 
l
i
n
e
 
i
t
e
m
s
 
p
a
s
s
e
d
 
f
o
r
 
n
e
w
 
i
n
v
o
i
c
e
.
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
 
=
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
c
m
s
_
u
s
e
r
_
i
d
'
 
]
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
r
a
i
s
e
d
_
d
a
t
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
u
e
_
d
a
t
e
 
=
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
r
a
i
s
e
d
_
d
a
t
e
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
d
u
e
_
d
a
t
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
u
e
_
d
a
t
e
 
=
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
d
u
e
_
d
a
t
e
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
s
u
b
s
c
r
i
p
t
i
o
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
 
=
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
s
u
b
s
c
r
i
p
t
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
 
=
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
i
s
_
c
o
m
m
i
s
s
i
o
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
i
s
_
c
o
m
m
i
s
s
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
s
t
a
t
u
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
t
u
s
 
=
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
s
t
a
t
u
s
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
i
n
s
e
r
t
 
t
h
e
 
n
e
w
 
i
n
v
o
i
c
e

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
m
m
i
t
N
e
w
I
n
v
o
i
c
e
(
)
;


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
l
i
n
e
_
i
t
e
m
s
 
a
s
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
d
d
_
l
i
n
e
_
i
t
e
m
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
u
p
d
a
t
e
 
t
h
e
 
i
n
v
o
i
c
e
 
w
i
t
h
 
n
e
w
 
t
o
t
a
l
s
 
a
f
t
e
r
 
i
n
s
e
r
t
i
n
g
 
t
h
e
 
l
i
n
e
 
i
t
e
m
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
m
m
i
t
U
p
d
a
t
e
I
n
v
o
i
c
e
(
)
;

 
 
 
 
}


 
 
 
 
/
/
A
d
d
 
a
 
n
e
w
 
l
i
n
e
 
i
t
e
m

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
a
d
d
_
l
i
n
e
_
i
t
e
m
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
-
>
c
h
e
c
k
_
l
i
n
e
_
i
t
e
m
_
d
a
t
a
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
L
i
n
e
 
i
t
e
m
 
t
e
s
t
 
f
a
i
l
e
d
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
d
'
]
 
=
 
0
;


 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
r
a
t
e
'
]
 
=
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
c
o
d
e
'
]
 
=
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
'
]
 
=
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
d
e
s
c
r
i
p
t
i
o
n
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
r
a
t
e
'
]
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
c
o
d
e
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
n
a
m
e
'
]
 
=
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
 
=
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
p
r
i
c
e
'
]
 
=
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
i
n
i
t
_
p
r
i
c
e
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
q
t
y
'
]
 
=
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
i
n
i
t
_
q
t
y
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
]
 
=
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
]
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
i
s
_
p
a
y
m
e
n
t
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
s
_
p
a
y
m
e
n
t
'
]
 
=
 
(
i
n
t
)
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
i
s
_
p
a
y
m
e
n
t
'
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
s
_
p
a
y
m
e
n
t
'
]
 
=
 
0
;

	
	
}

	
	
i
f
 
(
!
i
s
s
e
t
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
 
]
)
)
 
{

	
	
	
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
 
]
 
=
 
'
'
;

	
	
	
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
 
]
 
=
 
'
'
;

	
	
	
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
 
]
 
=
 
'
'
;

	
	
}

	
	
	

	
	

	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
]
	
=
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
 
]
;

	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
]
	
=
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
 
]
;

	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
]
	
=
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
 
]
;

	
	

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
v
_
i
d
'
]
 
=
 
$
t
h
i
s
-
>
i
d
;


 
 
 
 
 
 
 
 
$
i
_
t
o
t
a
l
 
=
 
(
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
p
r
i
c
e
'
]
 
*
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
q
t
y
'
]
)
 
+
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
]
;

	
	

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
t
o
t
a
l
'
]
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
i
_
t
o
t
a
l
,
 
2
,
 
'
.
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
i
t
_
t
o
t
a
l
_
t
a
x
 
=
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
r
a
t
e
'
]
 
*
 
(
$
i
_
t
o
t
a
l
 
/
 
1
0
0
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
i
t
_
t
o
t
a
l
_
t
a
x
 
=
 
0
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
]
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
i
_
t
o
t
a
l
 
+
 
$
i
n
i
t
_
t
o
t
a
l
_
t
a
x
,
 
2
,
 
'
.
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
i
t
_
t
o
t
a
l
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
t
h
i
s
-
>
i
n
i
t
_
t
o
t
a
l
 
+
 
$
i
_
t
o
t
a
l
 
+
 
$
i
n
i
t
_
t
o
t
a
l
_
t
a
x
,
 
2
,
 
'
.
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
/
/
i
n
s
e
r
t
 
t
h
e
 
n
e
w
 
l
i
n
e
 
i
t
e
m

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
m
m
i
t
L
i
n
e
I
t
e
m
(
)
;

 
 
 
 
}


 
 
 
 
/
/
U
p
d
a
t
e
 
a
n
 
e
x
i
s
t
i
n
g
 
i
n
v
o
i
c
e
 
b
y
 
d
e
l
e
t
i
n
g
 
a
l
l
 
l
i
n
e
 
i
t
e
m
s
 
a
n
d
 
i
n
s
e
r
t
i
n
g
 
n
e
w
 
o
n
e
s

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
_
i
n
v
o
i
c
e
(
$
i
n
v
o
i
c
e
_
d
a
t
a
,
 
$
l
i
n
e
_
i
t
e
m
s
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
D
E
L
E
T
E
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
W
H
E
R
E
 
i
n
v
_
i
d
 
=
'
.
$
t
h
i
s
-
>
i
d
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
.
'
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
d
 
=
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
i
d
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
I
n
v
o
i
c
e
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
s
t
a
t
u
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
t
u
s
 
=
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
s
t
a
t
u
s
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
d
u
e
_
d
a
t
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
u
e
_
d
a
t
e
 
=
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
d
u
e
_
d
a
t
e
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
c
m
s
_
u
s
e
r
_
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
 
=
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
c
m
s
_
u
s
e
r
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
i
n
v
o
i
c
e
_
d
a
t
a
[
 
'
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
i
t
_
t
o
t
a
l
 
=
 
0
.
0
0
;


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
l
i
n
e
_
i
t
e
m
s
 
a
s
 
$
i
t
e
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
d
d
_
l
i
n
e
_
i
t
e
m
(
$
i
t
e
m
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
m
m
i
t
U
p
d
a
t
e
I
n
v
o
i
c
e
(
)
;

 
 
 
 
}


 
 
 
 
/
/
U
p
d
a
t
e
 
l
i
n
e
 
i
t
e
m
,
 
n
o
t
 
c
u
r
r
e
n
t
l
y
 
u
s
e
d
.
 
I
t
`
l
l
 
s
t
a
y
 
h
e
r
e
 
f
o
r
 
n
o
w
,
 
j
u
s
t
 
i
n
 
c
a
s
e
 
w
e
`
l
l
 
a
d
d
 
i
n
v
o
i
c
e
 
e
d
i
t
i
n
g
 
f
e
a
t
u
r
e
s
 
i
n
 
t
h
e
 
f
u
t
u
r
e

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
_
l
i
n
e
_
i
t
e
m
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
W
e
;
r
e
 
e
x
p
e
c
t
i
n
g
 
t
o
 
s
e
e
 
t
h
e
 
i
d
,
 
 
i
n
i
t
_
q
t
y
,
 
i
n
i
t
_
d
i
s
c
o
u
n
t

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
L
i
n
e
 
i
t
e
m
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
 
i
s
s
e
t
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
)
 
&
&
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
r
a
t
e
'
]
 
=
 
(
f
l
o
a
t
)
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
c
o
d
e
'
]
 
=
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
'
]
 
=
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
d
e
s
c
r
i
p
t
i
o
n
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
r
a
t
e
'
]
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
c
o
d
e
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
d
'
]
 
=
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
i
d
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
L
i
n
e
I
t
e
m
(
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
q
t
y
'
]
 
=
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
i
n
i
t
_
q
t
y
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
]
 
=
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
]
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
s
_
p
a
y
m
e
n
t
'
]
 
=
 
(
i
n
t
)
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
i
s
_
p
a
y
m
e
n
t
'
 
]
;

	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
]
 
=
 
(
s
t
r
i
n
g
)
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
 
]
;

	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
]
 
=
 
(
i
n
t
)
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
 
]
;

	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
]
 
=
 
(
i
n
t
)
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
 
]
;

	
	

	
	

 
 
 
 
 
 
 
 
$
i
_
t
o
t
a
l
 
=
 
(
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
p
r
i
c
e
'
]
 
*
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
q
t
y
'
]
)
 
-
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
]
;

	
	

	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
t
o
t
a
l
'
]
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
i
_
t
o
t
a
l
,
 
2
,
 
'
.
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
i
t
_
t
o
t
a
l
_
t
a
x
 
=
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
r
a
t
e
'
]
 
*
 
(
$
i
_
t
o
t
a
l
 
/
 
1
0
0
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
i
t
_
t
o
t
a
l
_
t
a
x
 
=
 
0
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
]
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
i
_
t
o
t
a
l
 
+
 
$
i
n
i
t
_
t
o
t
a
l
_
t
a
x
,
 
2
,
 
'
.
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
i
t
_
t
o
t
a
l
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
t
h
i
s
-
>
i
n
i
t
_
t
o
t
a
l
 
+
 
$
i
_
t
o
t
a
l
 
+
 
$
i
n
i
t
_
t
o
t
a
l
_
t
a
x
,
 
2
,
 
'
.
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
m
m
i
t
U
p
d
a
t
e
L
i
n
e
I
t
e
m
(
)
;

 
 
 
 
}


 
 
 
 
/
/
C
h
e
c
k
 
t
h
e
 
l
i
n
e
 
i
t
e
m
 
d
a
t
a
 
a
n
d
 
i
f
 
i
t
 
d
o
e
s
n
`
t
 
h
a
v
e
 
a
 
n
a
m
e
,
 
r
e
t
u
r
n
 
f
a
l
s
e
 
a
n
d
 
d
o
n
`
t
 
i
n
s
e
r
t
 
t
h
e
 
l
i
n
e
 
i
t
e
m

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
_
l
i
n
e
_
i
t
e
m
_
d
a
t
a
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
n
a
m
e
'
 
]
)
 
|
|
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
[
 
'
n
a
m
e
'
 
]
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
L
i
n
e
 
i
t
e
m
 
t
e
s
t
 
f
a
i
l
e
d
 
o
n
 
i
t
e
m
 
n
a
m
e
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
/
G
e
t
 
t
h
e
 
i
n
v
o
i
c
e
 
d
e
t
a
i
l
s

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
v
o
i
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
i
d
`
,

	
	
	
	
	
	
`
c
m
s
_
u
s
e
r
_
i
d
`
,

	
	
	
	
	
	
`
s
t
a
t
u
s
`
,

	
	
	
	
	
	
`
r
a
i
s
e
d
_
d
a
t
e
`
,

	
	
	
	
	
	
`
d
u
e
_
d
a
t
e
`
,

	
	
	
	
	
	
`
p
a
i
d
`
,

	
	
	
	
	
	
`
s
u
b
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
	
	
`
i
n
i
t
_
t
o
t
a
l
`
,

	
	
	
	
	
	
`
c
u
r
r
e
n
c
y
c
o
d
e
`
,

	
	
	
	
	
	
`
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
`
,

	
	
	
	
	
	
`
c
o
n
t
r
a
c
t
_
i
d
`
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
u
i
d
`
,

	
	
	
	
	
	
`
i
s
_
c
o
m
m
i
s
s
i
o
n
`
,

	
	
	
	
	
	
`
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
`

	
	
	
	
	
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 

	
	
	
	
	
W
H
E
R
E
 
`
i
d
`
=
 
"
 
.
 
(
i
n
t
)
$
t
h
i
s
-
>
i
d
 
.
 
"
 

	
	
	
	
	
L
I
M
I
T
 
1
"
;


 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
 
&
&
 
c
o
u
n
t
(
$
r
e
s
u
l
t
)
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
d
 
=
 
$
r
-
>
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
 
=
 
$
r
-
>
c
m
s
_
u
s
e
r
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
t
u
s
 
=
 
$
r
-
>
s
t
a
t
u
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
a
i
s
e
d
_
d
a
t
e
 
=
 
$
r
-
>
r
a
i
s
e
d
_
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
u
e
_
d
a
t
e
 
=
 
$
r
-
>
d
u
e
_
d
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
i
d
 
=
 
$
r
-
>
p
a
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
 
=
 
$
r
-
>
s
u
b
s
c
r
i
p
t
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
i
t
_
t
o
t
a
l
 
=
 
$
r
-
>
i
n
i
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
r
-
>
c
u
r
r
e
n
c
y
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
 
=
 
$
r
-
>
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
i
d
 
=
 
$
r
-
>
c
o
n
t
r
a
c
t
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
$
r
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
 
=
 
$
r
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
t
_
v
a
t
_
c
h
a
r
g
i
n
g
_
f
l
a
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
N
o
 
I
n
v
o
i
c
e
s
 
w
e
r
e
 
f
o
u
n
d
 
w
i
t
h
 
t
h
a
t
 
i
d
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
c
o
u
n
t
(
$
r
e
s
u
l
t
)
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
M
o
r
e
 
t
h
a
n
 
o
n
e
 
I
n
v
o
i
c
e
 
w
a
s
 
f
o
u
n
d
 
w
i
t
h
 
t
h
a
t
 
i
d
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
G
e
t
 
t
h
e
 
l
i
n
e
 
i
t
e
m
 
d
e
t
a
i
l
s

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
L
i
n
e
I
t
e
m
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
d
'
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
L
i
n
e
 
i
t
e
m
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
i
d
`
,

	
	
	
	
	
	
`
n
a
m
e
`
,

	
	
	
	
	
	
`
d
e
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
	
	
`
i
n
i
t
_
p
r
i
c
e
`
,

	
	
	
	
	
	
`
i
n
i
t
_
q
t
y
`
,

	
	
	
	
	
	
`
i
n
i
t
_
d
i
s
c
o
u
n
t
`
,

	
	
	
	
	
	
`
i
n
i
t
_
t
o
t
a
l
`
,

	
	
	
	
	
	
`
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
`
,

	
	
	
	
	
	
`
t
a
x
_
c
o
d
e
`
,

	
	
	
	
	
	
`
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
	
	
`
t
a
x
_
r
a
t
e
`
,

	
	
	
	
	
	
`
i
n
v
_
i
d
`
,

	
	
	
	
	
	
`
i
s
_
p
a
y
m
e
n
t
`
,

	
	
	
	
	
	
`
p
a
y
m
e
n
t
_
m
e
t
h
o
d
`
,

	
	
	
	
	
	
`
t
r
a
n
s
a
c
t
i
o
n
_
i
d
`
,

	
	
	
	
	
	
`
m
a
n
a
g
e
m
e
n
t
_
u
r
l
`

	
	
	
	
	
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 

	
	
	
	
	
W
H
E
R
E
 
`
i
d
`
 
=
 
"
 
.
 
(
i
n
t
)
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
d
'
]
 
.
 
"
 

	
	
	
	
	
	
A
N
D
 
`
i
n
v
_
i
d
`
 
=
 
"
 
.
 
(
i
n
t
)
$
t
h
i
s
-
>
i
d
 
.
 
"

	
	
	
	
	
L
I
M
I
T
 
1
"
;


 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
 
&
&
 
c
o
u
n
t
(
$
r
e
s
u
l
t
)
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
d
'
]
 
=
 
$
r
-
>
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
n
a
m
e
'
]
 
=
 
$
r
-
>
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
 
=
 
$
r
-
>
d
e
s
c
r
i
p
t
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
p
r
i
c
e
'
]
 
=
 
$
r
-
>
i
n
i
t
_
p
r
i
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
q
t
y
'
]
 
=
 
$
r
-
>
i
n
i
t
_
q
t
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
]
 
=
 
$
r
-
>
i
n
i
t
_
d
i
s
c
o
u
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
t
o
t
a
l
'
]
 
=
 
$
r
-
>
i
n
i
t
_
t
o
t
a
l
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
]
 
=
 
$
r
-
>
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
c
o
d
e
'
]
 
=
 
$
r
-
>
t
a
x
_
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
'
]
 
=
 
$
r
-
>
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
r
a
t
e
'
]
 
=
 
$
r
-
>
t
a
x
_
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
v
_
i
d
'
]
 
=
 
$
r
-
>
i
n
v
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
s
_
p
a
y
m
e
n
t
'
]
 
=
 
$
r
-
>
i
s
_
p
a
y
m
e
n
t
;

	
	
	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
]
 
=
 
$
r
-
>
p
a
y
m
e
n
t
_
m
e
t
h
o
d
;

	
	
	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
]
 
=
 
$
r
-
>
t
r
a
n
s
a
c
t
i
o
n
_
i
d
;

	
	
	
	
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
]
 
=
 
$
r
-
>
m
a
n
a
g
e
m
e
n
t
_
u
r
l
;

	
	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
N
o
 
L
i
n
e
 
I
t
e
m
s
 
w
e
r
e
 
f
o
u
n
d
 
w
i
t
h
 
t
h
a
t
 
i
d
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
c
o
u
n
t
(
$
r
e
s
u
l
t
)
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
M
o
r
e
 
t
h
a
n
 
o
n
e
 
L
i
n
e
 
I
t
e
m
 
r
a
t
e
 
w
a
s
 
f
o
u
n
d
 
w
i
t
h
 
t
h
a
t
 
i
d
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

	
	

	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
/
/
I
n
s
e
r
t
 
a
 
n
e
w
 
i
n
v
o
i
c
e
 
w
i
t
h
 
n
o
 
l
i
n
e
 
i
t
e
m
s

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
o
m
m
i
t
N
e
w
I
n
v
o
i
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
t
_
v
a
t
_
c
h
a
r
g
i
n
g
_
f
l
a
g
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
i
d
 
<
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
`
c
m
s
_
u
s
e
r
_
i
d
`
,

	
	
	
	
	
	
	
`
s
t
a
t
u
s
`
,

	
	
	
	
	
	
	
`
r
a
i
s
e
d
_
d
a
t
e
`
,

	
	
	
	
	
	
	
`
d
u
e
_
d
a
t
e
`
,

	
	
	
	
	
	
	
`
p
a
i
d
`
,

	
	
	
	
	
	
	
`
s
u
b
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
	
	
	
`
i
n
i
t
_
t
o
t
a
l
`
,

	
	
	
	
	
	
	
`
c
u
r
r
e
n
c
y
c
o
d
e
`
,

	
	
	
	
	
	
	
`
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
`
,

	
	
	
	
	
	
	
`
c
o
n
t
r
a
c
t
_
i
d
`
,

	
	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
u
i
d
`
,

	
	
	
	
	
	
	
`
i
s
_
c
o
m
m
i
s
s
i
o
n
`
,

	
	
	
	
	
	
	
`
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
`

	
	
	
	
	
	
	
)

	
	
	
	
	
	
	
V
A
L
U
E
S

	
	
	
	
	
	
	
(

	
	
	
	
	
	
	
 
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
.
'
,

	
	
	
	
	
	
	
 
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
s
t
a
t
u
s
.
"
,

	
	
	
	
	
	
	
'
$
t
h
i
s
-
>
r
a
i
s
e
d
_
d
a
t
e
'
,

	
	
	
	
	
	
	
'
$
t
h
i
s
-
>
d
u
e
_
d
a
t
e
'
,

	
	
	
	
	
	
	
'
$
t
h
i
s
-
>
p
a
i
d
'
,

	
	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
.
"
,

	
	
	
	
	
	
	
'
$
t
h
i
s
-
>
i
n
i
t
_
t
o
t
a
l
'
,

	
	
	
	
	
	
	
'
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
c
o
d
e
'
,

	
	
	
	
	
	
	
"
.
(
i
n
t
)
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
.
'
,

	
	
	
	
	
	
	
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
i
d
.
'
,

	
	
	
	
	
	
	
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
.
'
,

	
	
	
	
	
	
	
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
.
'
,

	
	
	
	
	
	
	
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
.
'

	
	
	
	
	
	
	
)
'
;


 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
i
d
 
=
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
d
 
=
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
i
n
v
o
i
c
e
_
c
r
e
a
t
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
n
 
i
n
v
o
i
c
e
 
i
s
 
c
r
e
a
t
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
i
n
v
o
i
c
e
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
I
n
v
o
i
c
e
 
c
o
u
l
d
 
n
o
t
 
b
e
 
f
o
u
n
d
 
a
f
t
e
r
 
a
p
p
a
r
e
n
t
 
s
u
c
c
e
s
s
f
u
l
 
i
n
s
e
r
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
I
n
v
o
i
c
e
 
a
l
r
e
a
d
y
 
a
v
a
i
l
a
b
l
e
.
 
A
r
e
 
y
o
u
 
s
u
r
e
 
y
o
u
 
a
r
e
 
c
r
e
a
t
i
n
g
 
a
 
n
e
w
 
I
n
v
o
i
c
e
?
'
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
/
/
I
n
s
e
r
t
 
a
 
n
e
w
 
l
i
n
e
 
i
t
e
m

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
o
m
m
i
t
L
i
n
e
I
t
e
m
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
d
'
]
 
<
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s

	
	
	
	
(

	
	
	
	
`
n
a
m
e
`
,

	
	
	
	
`
d
e
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
`
i
n
i
t
_
p
r
i
c
e
`
,

	
	
	
	
`
i
n
i
t
_
q
t
y
`
,

	
	
	
	
`
i
n
i
t
_
d
i
s
c
o
u
n
t
`
,

	
	
	
	
`
i
n
i
t
_
t
o
t
a
l
`
,

	
	
	
	
`
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
`
,

	
	
	
	
`
t
a
x
_
c
o
d
e
`
,

	
	
	
	
`
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
`
t
a
x
_
r
a
t
e
`
,

	
	
	
	
`
i
n
v
_
i
d
`
,

	
	
	
	
`
i
s
_
p
a
y
m
e
n
t
`
,

	
	
	
	
`
p
a
y
m
e
n
t
_
m
e
t
h
o
d
`
,

	
	
	
	
`
t
r
a
n
s
a
c
t
i
o
n
_
i
d
`
,

	
	
	
	
`
m
a
n
a
g
e
m
e
n
t
_
u
r
l
`

	
	
	
	
)

	
	
	
	
V
A
L
U
E
S

	
	
	
	
(

	
	
	
	
"
'
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
n
a
m
e
'
]
.
'
"
,

	
	
	
	
"
'
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
.
'
"
,

	
	
	
	
'
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
p
r
i
c
e
'
]
.
'
,

	
	
	
	
'
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
q
t
y
'
]
.
'
,

	
	
	
	
'
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
]
.
'
,

	
	
	
	
'
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
t
o
t
a
l
'
]
.
'
,

	
	
	
	
'
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
]
.
"
,

	
	
	
	
'
"
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
c
o
d
e
'
]
.
"
'
,

	
	
	
	
'
"
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
'
]
.
"
'
,

	
	
	
	
"
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
r
a
t
e
'
]
.
'
,

	
	
	
	
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
.
'
,

	
	
	
	
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
s
_
p
a
y
m
e
n
t
'
]
.
'
,

	
	
	
	
"
'
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
]
.
'
"
,

	
	
	
	
"
'
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
]
.
'
"
,

	
	
	
	
"
'
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
]
.
'
"

	
	
	
	
)
'
;


 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
i
t
e
m
_
i
d
 
=
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
l
i
n
e
i
t
e
m
_
i
d
 
>
 
0
)
 
{

	
	
	
	
$
t
h
i
s
-
>
l
a
s
t
_
a
d
d
e
d
_
l
i
n
e
_
i
t
e
m
_
i
d
 
=
 
$
l
i
n
e
i
t
e
m
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
d
'
]
 
=
 
(
i
n
t
)
 
$
l
i
n
e
i
t
e
m
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
L
i
n
e
 
I
t
e
m
 
c
o
u
l
d
 
n
o
t
 
b
e
 
f
o
u
n
d
 
a
f
t
e
r
 
a
p
p
a
r
e
n
t
 
s
u
c
c
e
s
s
f
u
l
 
i
n
s
e
r
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
L
i
n
e
 
I
t
e
m
 
a
l
r
e
a
d
y
 
a
v
a
i
l
a
b
l
e
.
 
A
r
e
 
y
o
u
 
s
u
r
e
 
y
o
u
 
a
r
e
 
c
r
e
a
t
i
n
g
 
a
 
n
e
w
 
l
i
n
e
 
i
t
e
m
?
'
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
/
/
U
p
d
a
t
e
 
a
n
 
e
x
i
s
t
i
n
g
 
i
n
v
o
i
c
e

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
o
m
m
i
t
U
p
d
a
t
e
I
n
v
o
i
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
t
_
v
a
t
_
c
h
a
r
g
i
n
g
_
f
l
a
g
(
)
;


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
S
E
T

	
	
	
	
	
	
`
c
m
s
_
u
s
e
r
_
i
d
`
	
	
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
.
'
,

	
	
	
	
	
	
`
s
t
a
t
u
s
`
	
	
	
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
s
t
a
t
u
s
.
"
,

	
	
	
	
	
	
`
r
a
i
s
e
d
_
d
a
t
e
`
	
	
=
 
'
$
t
h
i
s
-
>
r
a
i
s
e
d
_
d
a
t
e
'
,

	
	
	
	
	
	
`
d
u
e
_
d
a
t
e
`
	
	
	
=
 
'
$
t
h
i
s
-
>
d
u
e
_
d
a
t
e
'
,

	
	
	
	
	
	
`
p
a
i
d
`
	
	
	
	
=
 
'
$
t
h
i
s
-
>
p
a
i
d
'
,

	
	
	
	
	
	
`
s
u
b
s
c
r
i
p
t
i
o
n
`
	
	
=
 
"
.
(
i
n
t
)
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
.
'
,

	
	
	
	
	
	
`
i
n
i
t
_
t
o
t
a
l
`
	
	
=
 
'
.
$
t
h
i
s
-
>
i
n
i
t
_
t
o
t
a
l
.
"
,

	
	
	
	
	
	
`
c
u
r
r
e
n
c
y
c
o
d
e
`
 
	
	
=
 
'
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
c
o
d
e
'
,

	
	
	
	
	
	
`
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
`
 
	
=
 
"
.
(
i
n
t
)
 
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
_
i
d
.
'
,

	
	
	
	
	
	
`
c
o
n
t
r
a
c
t
_
i
d
`
 
	
	
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
i
d
.
'
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
	
	
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
.
'
,

	
	
	
	
	
	
`
i
s
_
c
o
m
m
i
s
s
i
o
n
`
	
	
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
.
'
,

	
	
	
	
	
	
`
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
.
"

	
	
	
	
	
W
H
E
R
E
 
`
i
d
`
=
 
"
 
.
 
(
i
n
t
)
$
t
h
i
s
-
>
i
d
;


 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
i
n
v
o
i
c
e
_
u
p
d
a
t
e
d
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
n
 
i
n
v
o
i
c
e
 
i
s
 
u
p
d
a
t
e
d
.
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
i
n
v
o
i
c
e
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
i
d
;

	
	
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;

 
 
 
 
}


 
 
 
 
/
/
U
p
d
a
t
e
 
e
x
i
s
t
i
n
g
 
l
i
n
e
 
i
t
e
m

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
o
m
m
i
t
U
p
d
a
t
e
L
i
n
e
I
t
e
m
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
d
'
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
L
i
n
e
 
i
t
e
m
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
S
E
T

	
	
	
	
	
	
`
n
a
m
e
`
 
	
	
	
	
	
=
 
'
"
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
n
a
m
e
'
]
.
"
'
,

	
	
	
	
	
	
`
d
e
s
c
r
i
p
t
i
o
n
`
 
	
	
	
=
 
'
"
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
.
"
'
,

	
	
	
	
	
	
`
i
n
i
t
_
p
r
i
c
e
`
 
	
	
	
=
 
"
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
p
r
i
c
e
'
]
.
'
,

	
	
	
	
	
	
`
i
n
i
t
_
q
t
y
`
 
	
	
	
	
=
 
'
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
q
t
y
'
]
.
'
,

	
	
	
	
	
	
`
i
n
i
t
_
d
i
s
c
o
u
n
t
`
 
	
	
=
 
'
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
]
.
'
,

	
	
	
	
	
	
`
i
n
i
t
_
t
o
t
a
l
`
 
	
	
	
=
 
'
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
t
o
t
a
l
'
]
.
'
,

	
	
	
	
	
	
`
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
`
	
=
 
'
 
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
]
.
"
,

	
	
	
	
	
	
`
t
a
x
_
c
o
d
e
`
 
	
	
	
	
=
 
'
"
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
c
o
d
e
'
]
.
"
'
,

	
	
	
	
	
	
`
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
`
 
	
	
=
 
'
"
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
'
]
.
"
'
,

	
	
	
	
	
	
`
t
a
x
_
r
a
t
e
`
 
	
	
	
	
=
 
"
.
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
a
x
_
r
a
t
e
'
]
.
'
,

	
	
	
	
	
	
`
i
n
v
_
i
d
`
 
	
	
	
	
=
 
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
.
'
,

	
	
	
	
	
	
`
i
s
_
p
a
y
m
e
n
t
`
	
	
	
=
 
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
s
_
p
a
y
m
e
n
t
'
]
.
'
,

	
	
	
	
	
	
`
p
a
y
m
e
n
t
_
m
e
t
h
o
d
`
	
	
	
=
 
"
'
 
.
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
]
.
'
"
,

	
	
	
	
	
	
`
t
r
a
n
s
a
c
t
i
o
n
_
i
d
`
	
	
	
=
 
"
'
 
.
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
]
.
'
"
,

	
	
	
	
	
	
`
m
a
n
a
g
e
m
e
n
t
_
u
r
l
`
	
	
	
=
 
"
'
 
.
(
s
t
r
i
n
g
)
 
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
]
.
'
"

	
	
	
	
	
W
H
E
R
E
 
`
i
d
`
=
'
 
.
(
i
n
t
)
$
t
h
i
s
-
>
l
i
n
e
i
t
e
m
[
'
i
d
'
]
;

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;

 
 
 
 
}


 
 
 
 
/
/
D
e
l
e
t
e
 
a
 
l
i
n
e
 
i
t
e
m
 
b
y
 
i
d

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
d
e
l
e
t
e
L
i
n
e
I
t
e
m
B
y
I
d
(
$
l
i
n
e
_
i
t
e
m
_
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
l
i
n
e
_
i
t
e
m
_
i
d
 
<
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
L
i
n
e
 
i
t
e
m
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
D
E
L
E
T
E
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
W
H
E
R
E
 
`
i
d
`
 
=
 
'
.
$
l
i
n
e
_
i
t
e
m
_
i
d
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;

 
 
 
 
}


 
 
 
 
/
/
G
e
t
 
t
h
e
 
i
n
v
o
i
c
e
 
b
o
o
k
i
n
g
 
n
u
m
b
e
r
 
b
y
 
c
o
n
t
r
a
c
t
 
u
i
d
.
 
T
O
D
O
:
 
I
s
 
t
h
i
s
 
r
e
a
l
l
y
 
n
e
e
d
e
d
 
h
e
r
e
?
 
W
e
 
a
l
r
e
a
d
y
 
h
a
v
e
 
a
 
_
j
o
m
r
e
s
_
c
o
n
t
r
a
c
t
s
 
q
u
e
r
y
 
i
n
 
j
0
6
0
0
5
v
i
e
w
_
i
n
v
o
i
c
e
.
c
l
a
s
s
.
p
h
p
.

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
i
n
v
o
i
c
e
_
b
o
o
k
i
n
g
_
n
u
m
b
e
r
(
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
C
o
n
t
r
a
c
t
 
u
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
t
a
g
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
c
o
n
t
r
a
c
t
s
 
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;

 
 
 
 
}


 
 
 
 
/
/
C
h
e
c
k
 
i
f
 
w
e
'
l
l
 
c
h
a
r
g
e
 
V
A
T
 
o
r
 
n
o
t
 
f
o
r
 
t
h
i
s
 
b
2
b
 
i
n
v
o
i
c
e
 
a
n
d
 
s
e
t
 
t
h
e
 
f
l
a
g

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
b
2
b
_
t
r
a
n
s
a
c
t
i
o
n
_
i
s
_
v
a
t
_
t
o
_
b
e
_
c
h
a
r
g
e
d
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


 
 
 
 
 
 
 
 
/
/
 
V
A
T
 
f
o
r
 
h
o
t
e
l
 
b
o
o
k
i
n
g
s
 
i
s
 
c
o
m
p
l
i
c
a
t
e
d
 
b
y
 
c
r
o
s
s
 
b
o
r
d
e
r
 
i
s
s
u
e
s
,
 
t
h
e
 
w
h
o
l
e
 
s
u
b
j
e
c
t
 
i
s
 
v
e
r
y
 
d
i
f
f
i
c
u
l
t
 
s
o
 
a
t
 
t
h
i
s
 
p
o
i
n
t
 
i
t
'
s
 
m
u
c
h
 
e
a
s
i
e
r
 
t
o
 
s
a
y
 
t
h
a
t
 
i
f
 
i
t
'
s
 
a
 
h
o
t
e
l
 
b
o
o
k
i
n
g
,
 
t
h
e
n

 
 
 
 
 
 
 
 
/
/
 
w
e
 
w
i
l
l
 
a
l
w
a
y
s
 
c
h
a
r
g
e
 
V
A
T
.
 
C
h
a
n
g
e
 
b
o
o
k
i
n
g
s
_
c
a
n
_
b
e
_
v
a
t
_
e
x
e
m
p
t
 
t
o
 
t
r
u
e
 
t
o
 
a
l
l
o
w
 
b
o
o
k
i
n
g
s
 
t
o
 
b
e
 
e
x
e
m
p
t
.


 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


 
 
 
 
 
 
 
 
$
b
o
o
k
i
n
g
s
_
c
a
n
_
b
e
_
v
a
t
_
e
x
e
m
p
t
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
 
=
=
 
0
 
&
&
 
$
t
h
i
s
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
b
o
o
k
i
n
g
s
_
c
a
n
_
b
e
_
v
a
t
_
e
x
e
m
p
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
 
=
 
t
r
u
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
 
=
=
 
0
 
&
&
 
$
t
h
i
s
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
=
 
1
)
 
{
 
/
/
 
I
t
'
s
 
a
 
s
i
t
e
 
-
>
 
p
r
o
p
e
r
t
y
 
t
r
a
n
s
a
c
t
i
o
n
 
(
c
o
m
m
i
s
s
i
o
n
)
,
 
l
e
t
'
s
 
g
e
t
 
t
h
e
 
p
r
o
p
e
r
t
y
'
s
 
v
a
t
 
d
e
t
a
i
l
s
.

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
 
=
 
n
e
w
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
g
e
t
_
s
u
b
j
e
c
t
(
'
b
u
y
e
r
_
r
e
g
i
s
t
e
r
e
d
_
b
y
p
r
o
f
i
l
e
_
i
d
'
,
 
a
r
r
a
y
(
'
p
r
o
f
i
l
e
_
i
d
'
 
=
>
 
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
 
=
 
n
e
w
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
g
e
t
_
s
u
b
j
e
c
t
(
'
s
i
t
e
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
 
=
=
 
1
 
&
&
 
$
t
h
i
s
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
=
 
0
)
 
{
 
/
/
 
I
t
'
s
 
a
 
s
i
t
e
 
-
>
 
p
r
o
p
e
r
t
y
 
t
r
a
n
s
a
c
t
i
o
n
 
(
s
u
b
s
c
r
i
p
t
i
o
n
)
,
 
l
e
t
'
s
 
g
e
t
 
t
h
e
 
m
a
n
a
g
e
r
'
s
 
v
a
t
 
d
e
t
a
i
l
s
.

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
 
=
 
n
e
w
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
g
e
t
_
s
u
b
j
e
c
t
(
'
b
u
y
e
r
_
r
e
g
i
s
t
e
r
e
d
_
b
y
p
r
o
f
i
l
e
_
i
d
'
,
 
a
r
r
a
y
(
'
p
r
o
f
i
l
e
_
i
d
'
 
=
>
 
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
 
=
 
n
e
w
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
g
e
t
_
s
u
b
j
e
c
t
(
'
s
i
t
e
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
 
I
t
'
s
 
a
 
P
r
o
p
e
r
t
y
 
-
>
 
b
u
y
e
r
 
t
r
a
n
s
a
c
t
i
o
n

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
 
=
 
n
e
w
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
g
e
t
_
s
u
b
j
e
c
t
(
'
b
u
y
e
r
_
r
e
g
i
s
t
e
r
e
d
_
b
y
p
r
o
f
i
l
e
_
i
d
'
,
 
a
r
r
a
y
(
'
p
r
o
f
i
l
e
_
i
d
'
 
=
>
 
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
 
=
 
n
e
w
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
g
e
t
_
s
u
b
j
e
c
t
(
'
p
r
o
p
e
r
t
y
'
,
 
a
r
r
a
y
(
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
=
>
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
e
u
r
o
_
c
o
u
n
t
r
i
e
s
 
=
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
g
e
t
_
e
u
r
o
_
c
o
u
n
t
r
i
e
s
(
)
;


 
 
 
 
 
 
 
 
/
/
 
T
e
s
t
 
c
a
s
e

 
 
 
 
 
 
 
 
/
/
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
"
0
"
;

 
 
 
 
 
 
 
 
/
/
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
"
1
"
;

 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


 
 
 
 
 
 
 
 
/
/
 
Y
o
u
 
c
a
n
'
t
 
c
h
a
r
g
e
 
v
a
t
 
i
f
 
y
o
u
'
r
e
 
n
o
t
 
v
a
t
 
r
e
g
i
s
t
e
r
e
d
 
(
I
n
 
t
h
e
 
U
K
,
 
p
r
e
s
u
m
a
b
l
y
 
i
t
'
s
 
t
h
e
 
s
a
m
e
 
a
c
r
o
s
s
 
t
h
e
 
E
U
)
.

 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
F
r
o
m
 
t
h
i
s
 
p
o
i
n
t
 
o
n
w
a
r
d
s
 
w
e
 
k
n
o
w
 
t
h
a
t
 
t
h
e
 
s
e
l
l
e
r
 
i
s
 
u
s
i
n
g
 
a
 
v
a
l
i
d
 
V
A
T
 
n
u
m
b
e
r
.


 
 
 
 
 
 
 
 
/
/
 
T
e
s
t
 
c
a
s
e

 
 
 
 
 
 
 
 
/
/
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
 
"
G
B
"
;
 
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
 
=
 
f
a
l
s
e
;
 
/
/
 
b
u
y
e
r
 
i
s
 
i
n
 
E
U
,
 
s
e
l
l
e
r
 
i
s
 
n
o
t

 
 
 
 
 
 
 
 
/
/
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
 
"
G
B
"
;
 
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
 
=
 
t
r
u
e
;
 
/
/
 
b
u
y
e
r
 
i
s
 
i
n
 
E
U
,
 
s
e
l
l
e
r
 
i
s
 
i
n
 
E
U

 
 
 
 
 
 
 
 
/
/
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
 
"
U
S
"
;
 
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
 
=
 
f
a
l
s
e
;
 
/
/
 
b
u
y
e
r
 
i
s
 
n
o
t
 
i
n
 
E
U
,
 
s
e
l
l
e
r
 
i
s
 
n
o
t
 
i
n
 
E
U

 
 
 
 
 
 
 
 
/
/
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
 
"
U
S
"
;
 
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
 
=
 
t
r
u
e
;
 
/
/
 
b
u
y
e
r
 
i
s
 
n
o
t
 
i
n
 
E
U
,
 
s
e
l
l
e
r
 
i
s
 
i
n
 
E
U

 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


 
 
 
 
 
 
 
 
/
/
 
T
h
e
 
b
u
y
e
r
 
i
s
n
'
t
 
i
n
 
a
n
 
E
U
 
c
o
u
n
t
r
y
,
 
b
u
t
 
t
h
e
 
s
e
l
l
e
r
 
i
s
,
 
w
e
 
w
i
l
l
 
n
o
t
 
c
h
a
r
g
e
 
t
h
e
m
 
V
A
T

 
 
 
 
 
 
 
 
i
f
 
(
!
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
,
 
$
e
u
r
o
_
c
o
u
n
t
r
i
e
s
)
 
&
&
 
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
T
e
s
t
 
c
a
s
e

 
 
 
 
 
 
 
 
/
/
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
 
"
G
B
"
;
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
 
"
F
R
"
;
 
/
/
 
b
u
y
e
r
 
i
s
 
i
n
 
G
B
,
 
s
e
l
l
e
r
 
i
s
 
i
n
 
F
R

 
 
 
 
 
 
 
 
/
/
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
 
"
G
B
"
;
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
 
"
G
B
"
;
 
/
/
 
b
u
y
e
r
 
i
s
 
i
n
 
G
B
,
 
s
e
l
l
e
r
 
i
s
 
i
n
 
G
B

 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


 
 
 
 
 
 
 
 
/
/
 
T
h
e
y
'
r
e
 
i
n
 
t
h
e
 
s
a
m
e
 
c
o
u
n
t
r
y
,
 
 
V
A
T
'
l
l
 
b
e
 
c
h
a
r
g
e
d

 
 
 
 
 
 
 
 
i
f
 
(
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
=
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
 
=
 
t
r
u
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
T
e
s
t
 
c
a
s
e

 
 
 
 
 
 
 
 
/
/
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
 
"
G
B
"
;
 
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
 
=
 
t
r
u
e
;
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
"
G
B
"
;
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
"
D
E
"
;
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
/
/
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
 
"
G
B
"
;
 
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
 
=
 
t
r
u
e
;
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
"
G
B
"
;
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
=
"
D
E
"
;
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
 
t
r
u
e
;
 
/
/
 
b
u
y
e
r
 
i
s
 
i
n
 
E
U
,
 
s
e
l
l
e
r
 
i
s
 
i
n
 
E
U


 
 
 
 
 
 
 
 
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/
/


 
 
 
 
 
 
 
 
/
/
 
T
h
e
y
'
r
e
 
b
o
t
h
 
i
n
 
t
h
e
 
E
U
,
 
b
u
t
 
i
n
 
d
i
f
f
e
r
e
n
t
 
c
o
u
n
t
r
i
e
s
,
 
a
n
d
 
t
h
e
 
b
u
y
e
r
 
i
s
 
n
o
t
 
u
s
i
n
g
 
a
 
r
e
g
i
s
t
e
r
e
d
 
V
A
T
 
n
u
m
b
e
r
,
 
V
A
T
 
w
i
l
l
 
b
e
 
c
h
a
r
g
e
d

 
 
 
 
 
 
 
 
i
f
 
(

 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
,
 
$
e
u
r
o
_
c
o
u
n
t
r
i
e
s
)
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
!
=
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
=
 
'
0
'

 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
 
=
 
t
r
u
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
T
h
e
y
'
r
e
 
b
o
t
h
 
i
n
 
t
h
e
 
E
U
,
 
a
n
d
 
i
n
 
d
i
f
f
e
r
e
n
t
 
c
o
u
n
t
r
i
e
s
.
 
T
h
e
 
b
u
y
e
r
'
s
 
V
A
T
 
n
u
m
b
e
r
 
h
a
s
 
b
e
e
n
 
V
a
l
i
d
a
t
e
d
.
 
T
h
e
 
s
e
l
l
e
r
'
s
 
V
A
T
 
n
u
m
b
e
r
 
h
a
s
 
b
e
e
n
 
V
a
l
i
d
a
t
e
d
.
 
V
A
T
 
w
i
l
l
 
n
o
t
 
b
e
 
c
h
a
r
g
e
d
.

 
 
 
 
 
 
 
 
i
f
 
(

 
 
 
 
 
 
 
 
 
 
 
 
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
,
 
$
e
u
r
o
_
c
o
u
n
t
r
i
e
s
)
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
!
=
 
$
s
e
l
l
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
 
&
&

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
y
e
r
_
v
a
l
i
d
a
t
i
o
n
-
>
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
e
d
 
=
=
 
'
1
'

 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
C
h
e
c
k
 
i
f
 
w
e
'
l
l
 
c
h
a
r
g
e
 
V
A
T
 
o
r
 
n
o
t
 
f
o
r
 
t
h
i
s
 
i
n
v
o
i
c
e
 
a
n
d
 
s
e
t
 
t
h
e
 
f
l
a
g

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
s
e
t
_
v
a
t
_
c
h
a
r
g
i
n
g
_
f
l
a
g
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
'
)
;

 
 
 
 
 
 
 
 
$
v
a
l
i
d
a
t
i
o
n
 
=
 
n
e
w
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
(
0
)
;

 
 
 
 
 
 
 
 
$
e
u
r
o
_
c
o
u
n
t
r
i
e
s
 
=
 
$
v
a
l
i
d
a
t
i
o
n
-
>
g
e
t
_
e
u
r
o
_
c
o
u
n
t
r
i
e
s
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
s
u
b
s
c
r
i
p
t
i
o
n
 
=
=
 
0
 
&
&
 
$
t
h
i
s
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
i
d
a
t
i
o
n
 
=
 
n
e
w
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
i
d
a
t
i
o
n
-
>
g
e
t
_
s
u
b
j
e
c
t
(
'
p
r
o
p
e
r
t
y
'
,
 
a
r
r
a
y
(
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
=
>
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
 
I
t
'
s
 
n
o
t
 
a
 
b
o
o
k
i
n
g
 
f
o
r
 
a
 
h
o
t
e
l
,
 
i
n
s
t
e
a
d
 
i
t
'
s
 
a
 
w
e
b
s
i
t
e
 
-
>
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
i
n
v
o
i
c
e
 
o
f
 
s
o
m
e
 
d
e
s
c
r
i
p
t
i
o
n

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
i
d
a
t
i
o
n
 
=
 
n
e
w
 
v
a
t
_
n
u
m
b
e
r
_
v
a
l
i
d
a
t
i
o
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
i
d
a
t
i
o
n
-
>
g
e
t
_
s
u
b
j
e
c
t
(
'
s
i
t
e
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
s
e
l
l
e
r
_
b
u
s
i
n
e
s
s
_
c
o
u
n
t
r
y
 
=
 
$
v
a
l
i
d
a
t
i
o
n
-
>
c
o
u
n
t
r
y
;


 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
s
e
l
l
e
r
_
b
u
s
i
n
e
s
s
_
c
o
u
n
t
r
y
,
 
$
e
u
r
o
_
c
o
u
n
t
r
i
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
c
m
s
_
u
s
e
r
_
i
d
 
=
=
 
0
)
 
{
 
/
/
 
T
h
e
r
e
'
s
 
n
o
 
c
m
s
 
u
s
e
r
 
i
d
 
s
t
o
r
e
d
,
 
e
r
g
o
 
w
e
 
w
i
l
l
 
n
o
t
 
h
a
v
e
 
V
A
T
 
d
e
t
a
i
l
s
 
f
o
r
 
t
h
i
s
 
u
s
e
r
 
s
o
 
w
e
 
m
u
s
t
 
c
h
a
r
g
e
 
V
A
T

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
t
h
i
s
-
>
c
h
a
r
g
i
n
g
_
b
u
s
i
n
e
s
s
_
i
s
_
i
n
_
e
u
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
 
=
 
t
r
u
e
;
 
/
/
 
W
e
 
d
o
n
'
t
 
(
y
e
t
)
 
h
a
v
e
 
a
 
m
e
c
h
a
n
i
s
m
 
f
o
r
 
h
a
n
d
l
i
n
g
 
o
t
h
e
r
 
t
r
a
d
i
n
g
 
b
l
o
c
s
,
 
s
o
 
w
e
'
l
l
 
j
u
s
t
 
e
n
a
b
l
e
 
V
A
T
 
t
o
 
b
e
 
c
h
a
r
g
e
d
 
f
o
r
 
a
l
l
 
n
o
n
-
e
u
r
o
p
e
a
n
 
c
o
u
n
t
r
i
e
s
 
f
o
r
 
n
o
w
.

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
2
b
_
t
r
a
n
s
a
c
t
i
o
n
_
i
s
_
v
a
t
_
t
o
_
b
e
_
c
h
a
r
g
e
d
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
I
n
v
o
i
c
e
 
s
t
a
t
u
s
:

 
 
 
 
/
/
 
0
 
u
n
p
a
i
d

 
 
 
 
/
/
 
1
 
p
a
i
d

 
 
 
 
/
/
 
2
 
c
a
n
c
e
l
l
e
d

 
 
 
 
/
/
 
3
 
p
e
n
d
i
n
g


 
 
 
 
/
/
M
a
r
k
 
a
n
 
i
n
v
o
i
c
e
 
a
s
 
p
a
i
d

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
r
k
_
i
n
v
o
i
c
e
_
p
a
i
d
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
t
u
s
 
=
 
1
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
i
d
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
;


 
 
 
 
 
 
 
 
$
t
o
d
a
y
 
=
 
o
u
t
p
u
t
D
a
t
e
(
d
a
t
e
(
'
Y
/
m
/
d
'
)
)
;


 
 
 
 
 
 
 
 
$
b
a
l
a
n
c
e
 
=
 
$
t
h
i
s
-
>
g
e
t
_
l
i
n
e
_
i
t
e
m
s
_
b
a
l
a
n
c
e
(
)
;


	
	
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
"
g
a
t
e
w
a
y
_
p
a
y
m
e
n
t
_
m
e
t
h
o
d
"
)
;

	
	
$
m
a
n
a
g
e
m
e
n
t
_
u
r
l
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
"
g
a
t
e
w
a
y
_
m
a
n
a
g
e
m
e
n
t
_
u
r
l
"
)
;

	
	
$
t
r
a
n
s
a
c
t
i
o
n
_
i
d
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
"
g
a
t
e
w
a
y
_
t
r
a
n
s
a
c
t
i
o
n
_
i
d
"
)
;

	
	
	
	

	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
)
)

	
	
	
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
 
=
 
'
'
;

	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
m
a
n
a
g
e
m
e
n
t
_
u
r
l
)
)

	
	
	
$
m
a
n
a
g
e
m
e
n
t
_
u
r
l
 
=
 
'
'
;

	
	
i
f
 
(
i
s
_
n
u
l
l
(
$
t
r
a
n
s
a
c
t
i
o
n
_
i
d
)
)

	
	
	
$
t
r
a
n
s
a
c
t
i
o
n
_
i
d
 
=
 
'
'
;

	
	

 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
b
a
l
a
n
c
e
,
 
2
,
 
'
.
'
,
 
'
'
)
 
>
 
0
.
0
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
 
=
 
a
r
r
a
y
(
'
t
a
x
_
c
o
d
e
_
i
d
'
 
=
>
 
0
,

	
	
	
	
	
	
	
	
	
'
n
a
m
e
'
 
=
>
 
'
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
B
A
L
A
N
C
E
_
P
A
Y
M
E
N
T
'
,

	
	
	
	
	
	
	
	
	
'
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
(
'
.
$
t
o
d
a
y
.
'
)
'
,

	
	
	
	
	
	
	
	
	
'
i
n
i
t
_
p
r
i
c
e
'
 
=
>
 
0
 
-
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
b
a
l
a
n
c
e
,
 
2
,
 
'
.
'
,
 
'
'
)
,

	
	
	
	
	
	
	
	
	
'
i
n
i
t
_
q
t
y
'
 
=
>
 
1
,

	
	
	
	
	
	
	
	
	
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
=
>
 
0
,

	
	
	
	
	
	
	
	
	
'
i
s
_
p
a
y
m
e
n
t
'
 
=
>
 
1
,

	
	
	
	
	
	
	
	
	
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
 
=
>
 
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
,

	
	
	
	
	
	
	
	
	
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
 
=
>
 
$
m
a
n
a
g
e
m
e
n
t
_
u
r
l
,

	
	
	
	
	
	
	
	
	
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
 
=
>
 
$
t
r
a
n
s
a
c
t
i
o
n
_
i
d

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

	
	

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
d
d
_
l
i
n
e
_
i
t
e
m
(
$
l
i
n
e
_
i
t
e
m
_
d
a
t
a
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
m
m
i
t
U
p
d
a
t
e
I
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
/
M
a
r
k
 
a
n
 
i
n
v
o
i
c
e
 
a
s
 
p
e
n
d
i
n
g

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
r
k
_
i
n
v
o
i
c
e
_
p
e
n
d
i
n
g
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
t
u
s
 
=
 
3
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
i
d
 
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
m
m
i
t
U
p
d
a
t
e
I
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
/
M
a
r
k
 
a
n
 
i
n
v
o
i
c
e
 
a
s
 
u
n
p
a
i
d

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
r
k
_
i
n
v
o
i
c
e
_
u
n
p
a
i
d
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
d
e
l
e
t
e
 
p
a
y
m
e
n
t
 
i
t
e
m
s
 
f
r
o
m
 
t
h
e
 
l
i
n
e
 
i
t
e
m
s
 
t
a
b
l
e

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
D
E
L
E
T
E
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
W
H
E
R
E
 
`
i
n
v
_
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
.
'
 
A
N
D
 
`
i
s
_
p
a
y
m
e
n
t
`
 
=
 
1
 
'
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
t
u
s
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
i
d
 
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
m
m
i
t
U
p
d
a
t
e
I
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
/
M
a
r
k
 
a
n
 
i
n
v
o
i
c
e
 
a
s
 
c
a
n
c
e
l
l
e
d

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
r
k
_
i
n
v
o
i
c
e
_
c
a
n
c
e
l
l
e
d
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
t
a
t
u
s
 
=
 
2
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
m
m
i
t
U
p
d
a
t
e
I
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
i
n
v
o
i
c
e
_
c
a
n
c
e
l
l
e
d
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
a
n
 
i
n
v
o
i
c
e
 
i
s
 
m
a
r
k
e
d
 
a
s
 
c
a
n
c
e
l
l
e
d
.
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
i
n
v
o
i
c
e
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
i
d
;

 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;

 
 
 
 
}


 
 
 
 
/
/
M
a
r
k
 
a
n
 
i
n
v
o
i
c
e
 
a
s
 
i
s
s
u
e
d

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
r
k
_
i
n
v
o
i
c
e
_
i
s
s
u
e
d
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
a
i
s
e
d
_
d
a
t
e
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
 
H
:
i
:
s
'
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
u
e
_
d
a
t
e
 
=
 
$
t
h
i
s
-
>
r
a
i
s
e
d
_
d
a
t
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
i
d
 
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
m
m
i
t
U
p
d
a
t
e
I
n
v
o
i
c
e
(
)
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
/
/
G
e
t
 
t
h
e
 
l
i
n
e
 
i
t
e
m
s
 
b
a
l
a
n
c
e

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
l
i
n
e
_
i
t
e
m
s
_
b
a
l
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
t
h
i
s
-
>
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
n
v
o
i
c
e
 
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
S
U
M
(
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
)
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
l
i
n
e
i
t
e
m
s
 
W
H
E
R
E
 
i
n
v
_
i
d
 
=
 
'
.
(
i
n
t
)
$
t
h
i
s
-
>
i
d
;

	
	
$
b
a
l
a
n
c
e
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;


	
	
i
f
 
(
$
b
a
l
a
n
c
e
)
 
{

	
	
	
r
e
t
u
r
n
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
$
b
a
l
a
n
c
e
,
 
2
,
 
'
.
'
,
 
'
'
)
;

	
	
}

	
	

	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
i
n
v
o
i
c
e
_
i
d
_
b
y
_
c
o
n
t
r
a
c
t
_
u
i
d
(
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
C
o
n
t
r
a
c
t
 
u
i
d
 
n
o
t
 
s
e
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
W
H
E
R
E
 
`
c
o
n
t
r
a
c
t
_
i
d
`
=
'
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
'
 
L
I
M
I
T
 
1
 
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
(
i
n
t
)
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;

 
 
 
 
}

}

