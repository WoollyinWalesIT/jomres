
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


/
/
 
G
e
t
s
 
t
h
e
 
e
x
c
h
a
n
g
e
 
r
a
t
e
s
 
a
n
d
 
s
t
o
r
e
s
 
t
h
e
m
 
i
n
 
a
 
t
e
m
p
o
r
a
r
y
 
f
i
l
e
.
 
U
p
d
a
t
e
s
 
t
h
e
 
e
x
c
h
a
n
g
e
 
r
a
t
e
s
 
d
a
i
l
y
,
 
o
r
 
w
h
e
n
e
v
e
r
 
t
h
e
 
e
x
c
h
a
n
g
e
 
r
a
t
e
 
t
e
m
p
 
f
i
l
e
 
d
o
e
s
n
'
t
 
e
x
i
s
t
.


c
l
a
s
s
 
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
e
x
c
h
a
n
g
e
_
r
a
t
e
s

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
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
s
i
t
e
C
o
n
f
i
g
 
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
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
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
f
e
a
t
u
r
e
_
e
n
a
b
l
e
d
 
=
 
(
b
o
o
l
)
 
$
j
r
C
o
n
f
i
g
[
'
u
s
e
_
c
o
n
v
e
r
s
i
o
n
_
f
e
a
t
u
r
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
a
p
p
_
i
d
 
=
 
t
r
i
m
(
$
j
r
C
o
n
f
i
g
[
'
o
p
e
n
e
x
c
h
a
n
g
e
r
a
t
e
s
_
a
p
i
_
k
e
y
'
]
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
a
s
e
_
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
u
p
d
a
t
e
_
n
o
w
 
=
 
f
a
l
s
e
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
t
e
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


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
b
a
s
e
_
u
r
i
 
=
 
'
h
t
t
p
:
/
/
o
p
e
n
e
x
c
h
a
n
g
e
r
a
t
e
s
.
o
r
g
/
a
p
i
/
'
;

	
	
$
t
h
i
s
-
>
q
u
e
r
y
_
s
t
r
i
n
g
 
=
 
'
l
a
t
e
s
t
.
j
s
o
n
?
a
p
p
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
a
p
p
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
e
x
c
h
a
n
g
e
_
r
a
t
e
_
c
l
a
s
s
f
i
l
e
 
=
 
J
O
M
R
E
S
_
T
E
M
P
_
A
B
S
P
A
T
H
.
'
e
x
c
h
a
n
g
e
r
a
t
e
s
_
'
.
$
t
h
i
s
-
>
b
a
s
e
_
c
o
d
e
.
'
.
p
h
p
'
;


 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
t
h
i
s
-
>
e
x
c
h
a
n
g
e
_
r
a
t
e
_
c
l
a
s
s
f
i
l
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
t
h
i
s
 
p
o
p
u
l
a
t
e
s
 
$
t
h
i
s
-
>
r
a
t
e
s
 
w
i
t
h
 
t
h
e
 
e
x
i
s
t
i
n
g
 
e
x
c
h
a
n
g
e
 
r
a
t
e
s
 
a
r
r
a
y

 
 
 
 
 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
_
o
n
c
e
 
$
t
h
i
s
-
>
e
x
c
h
a
n
g
e
_
r
a
t
e
_
c
l
a
s
s
f
i
l
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
e
x
c
h
a
n
g
e
_
r
a
t
e
_
f
i
l
e
_
e
x
p
i
r
e
d
(
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
u
p
d
a
t
e
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
u
p
d
a
t
e
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
r
a
t
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
u
p
d
a
t
e
_
n
o
w
 
=
 
t
r
u
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
u
p
d
a
t
e
_
n
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
u
p
d
a
t
e
_
e
x
c
h
a
n
g
e
_
r
a
t
e
s
(
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
a
v
e
_
r
a
t
e
s
(
)
;

	
	
	
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
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
s
t
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
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
/
/
c
h
e
c
k
 
i
f
 
e
x
c
h
a
n
g
e
 
r
a
t
e
s
 
f
i
l
e
s
 
i
s
 
e
x
p
i
r
e
d
 
(
i
t
`
s
 
n
o
t
 
f
r
o
m
 
t
o
d
a
y
)

 
 
 
 
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
 
e
x
c
h
a
n
g
e
_
r
a
t
e
_
f
i
l
e
_
e
x
p
i
r
e
d
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
l
a
s
t
_
m
o
d
i
f
i
e
d
 
=
 
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
,
 
f
i
l
e
m
t
i
m
e
(
$
t
h
i
s
-
>
e
x
c
h
a
n
g
e
_
r
a
t
e
_
c
l
a
s
s
f
i
l
e
)
)
;

 
 
 
 
 
 
 
 
$
t
o
d
a
y
 
=
 
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
,
 
t
i
m
e
(
)
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
t
o
d
a
y
 
!
=
 
$
l
a
s
t
_
m
o
d
i
f
i
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
u
p
d
a
t
e
 
e
x
c
h
a
n
g
e
 
r
a
t
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
e
x
c
h
a
n
g
e
_
r
a
t
e
s
(
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
f
e
a
t
u
r
e
_
e
n
a
b
l
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
a
p
p
_
i
d
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
t
e
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


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
s
 
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
c
u
r
r
e
n
c
y
_
c
o
d
e
s
'
)
;


 
 
 
 
 
 
 
 
i
g
n
o
r
e
_
u
s
e
r
_
a
b
o
r
t
(
t
r
u
e
)
;
 
/
/
 
S
h
o
u
l
d
 
s
t
o
p
 
a
 
u
s
e
r
 
f
r
o
m
 
v
i
s
i
t
i
n
g
 
a
n
o
t
h
e
r
 
p
a
g
e
 
w
h
e
n
 
w
e
'
r
e
 
g
e
t
t
i
n
g
 
t
h
e
 
e
x
c
h
a
n
g
e
 
r
a
t
e
s
.
 
A
t
 
s
o
m
e
 
p
o
i
n
t
,
 
i
t
 
m
i
g
h
t
 
b
e
 
w
i
s
e
r
 
t
o
 
e
n
c
o
u
r
a
g
e
 
m
a
n
a
g
e
r
s
 
t
o
 
s
e
t
 
t
h
i
s
 
a
s
 
a
 
c
r
o
n
 
j
o
b
.


 
 
 
 
 
 
 
 
$
j
s
o
n
 
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
o
p
e
n
e
x
c
h
a
n
g
e
r
a
t
e
s
_
r
a
t
e
s
(
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
j
s
o
n
)
 
|
|
 
!
$
j
s
o
n
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
"
A
f
t
e
r
 
r
e
a
d
i
n
g
 
e
x
c
h
a
n
g
e
 
r
a
t
e
 
f
i
l
e
,
 
t
h
e
 
j
s
o
n
 
v
a
r
i
a
b
l
e
 
i
s
 
f
o
u
n
d
 
t
o
 
b
e
 
N
U
L
L
.
 
T
h
e
 
m
o
s
t
 
l
i
k
e
l
y
 
c
a
u
s
e
 
i
s
 
e
i
t
h
e
r
 
C
U
R
L
 
n
o
t
 
w
o
r
k
i
n
g
/
f
i
r
e
w
a
l
l
e
d
,
 
o
r
 
t
h
e
 
A
P
I
 
i
s
n
'
t
 
s
e
t
/
i
s
 
w
r
o
n
g
.
"
;


 
 
 
 
 
 
 
 
 
 
 
 
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
$
m
e
s
s
a
g
e
,
 
'
C
o
r
e
'
,
 
'
E
R
R
O
R
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
 
W
e
 
c
a
n
 
s
a
f
e
l
y
 
a
s
s
u
m
e
 
t
h
a
t
 
t
h
e
r
e
'
s
 
a
 
G
B
P
 
e
x
c
h
a
n
g
e
 
r
a
t
e
 
(
a
t
 
l
e
a
s
t
,
 
f
o
r
 
t
h
e
 
f
o
r
s
e
e
a
b
l
e
 
f
u
t
u
r
e
.
 
I
f
 
t
h
e
r
e
 
i
s
n
'
t
,
 
t
h
e
n
 
t
h
e
 
w
o
r
l
d
 
h
a
s
 
p
r
o
b
a
b
l
y
 
b
e
e
n
 
i
n
v
a
d
e
d
 
b
y
 
a
l
i
e
n
s
 
a
n
d
 
e
x
c
h
a
n
g
e
 
r
a
t
e
s
 
i
n
 
J
o
m
r
e
s
 
i
s
 
t
h
e
 
l
e
a
s
t
 
o
f
 
o
u
r
 
p
r
o
b
l
e
m
s
.
 
R
u
l
e
 
B
r
i
t
a
n
n
i
a
 
a
n
d
 
a
l
l
 
t
h
a
t
.
 
)

 
 
 
 
 
 
 
 
$
G
B
P
_
r
a
t
e
 
=
 
$
j
s
o
n
-
>
G
B
P
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
c
u
r
r
e
n
c
y
_
c
o
d
e
s
-
>
c
o
d
e
s
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
j
s
o
n
-
>
$
k
)
 
&
&
 
$
k
 
!
=
 
'
G
B
P
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
C
r
o
s
s
 
e
x
c
h
a
n
g
e
 
r
a
t
e
 
c
a
l
c
u
l
a
t
i
o
n
.
 
A
s
 
t
h
e
 
b
a
s
e
 
e
x
c
h
a
n
g
e
 
r
a
t
e
 
i
n
 
J
o
m
r
e
s
 
i
s
 
G
B
P
 
w
e
 
h
a
v
e
 
t
o
 
c
o
n
v
e
r
t
 
t
h
e
 
3
r
d
 
c
h
a
n
g
e
 
r
a
t
e
 
t
o
 
G
B
P
 
b
e
f
o
r
e
 
s
a
v
i
n
g
 
i
t
.
 
T
h
e
 
B
a
s
e
 
r
a
t
e
 
o
f
 
O
p
e
n
 
E
x
c
h
a
n
g
e
 
R
a
t
e
s
 
i
s
 
U
S
D

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
 
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
(
f
l
o
a
t
)
 
$
j
s
o
n
-
>
$
k
 
/
 
$
G
B
P
_
r
a
t
e
,
 
4
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
r
a
t
e
s
[
 
$
t
h
i
s
-
>
b
a
s
e
_
c
o
d
e
 
]
[
 
$
k
 
]
 
=
 
$
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
a
d
d
 
G
B
P
 
t
o
 
G
B
P
 
e
x
c
h
a
n
g
e
 
r
a
t
e
 
=
 
1

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
a
t
e
s
[
 
$
t
h
i
s
-
>
b
a
s
e
_
c
o
d
e
 
]
[
 
$
t
h
i
s
-
>
b
a
s
e
_
c
o
d
e
 
]
 
=
 
1
;


 
 
 
 
 
 
 
 
i
g
n
o
r
e
_
u
s
e
r
_
a
b
o
r
t
(
f
a
l
s
e
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
s
a
v
e
 
e
x
c
h
a
n
g
e
 
r
a
t
e
s
 
t
o
 
f
i
l
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
 
s
a
v
e
_
r
a
t
e
s
(
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
f
e
a
t
u
r
e
_
e
n
a
b
l
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
e
m
p
t
y
(
$
t
h
i
s
-
>
r
a
t
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
!
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
(
$
t
h
i
s
-
>
e
x
c
h
a
n
g
e
_
r
a
t
e
_
c
l
a
s
s
f
i
l
e
,

'
<
?
p
h
p

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
 
\
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
\
'
 
)
 
o
r
 
d
i
e
(
 
\
'
\
'
 
)
;

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
#
#


$
t
h
i
s
-
>
r
a
t
e
s
 
=
 
'
 
.
v
a
r
_
e
x
p
o
r
t
(
$
t
h
i
s
-
>
r
a
t
e
s
,
 
t
r
u
e
)
.
'
;

'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
E
R
R
O
R
:
 
'
.
$
t
h
i
s
-
>
e
x
c
h
a
n
g
e
_
r
a
t
e
_
c
l
a
s
s
f
i
l
e
.
'
 
c
a
n
`
t
 
b
e
 
s
a
v
e
d
.
 
P
l
e
a
s
e
 
s
o
l
v
e
 
t
h
e
 
p
e
r
m
i
s
s
i
o
n
 
p
r
o
b
l
e
m
 
a
n
d
 
t
r
y
 
a
g
a
i
n
.
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
g
e
t
 
e
x
c
h
a
n
g
e
 
r
a
t
e
s
 
j
s
o
n

 
 
 
 
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
o
p
e
n
e
x
c
h
a
n
g
e
r
a
t
e
s
_
r
a
t
e
s
(
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
f
e
a
t
u
r
e
_
e
n
a
b
l
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
s
o
n
 
=
 
'
'
;

	
	

	
	
t
r
y
 
{

	
	
	
$
c
l
i
e
n
t
 
=
 
n
e
w
 
G
u
z
z
l
e
H
t
t
p
\
C
l
i
e
n
t
(
[

	
	
	
	
'
b
a
s
e
_
u
r
i
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
b
a
s
e
_
u
r
i

	
	
	
]
)
;


	
	
	
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
'
S
t
a
r
t
i
n
g
 
g
u
z
z
l
e
 
c
a
l
l
 
t
o
 
'
.
$
t
h
i
s
-
>
b
a
s
e
_
u
r
i
.
$
t
h
i
s
-
>
q
u
e
r
y
_
s
t
r
i
n
g
,
 
'
G
u
z
z
l
e
'
,
 
'
D
E
B
U
G
'
)
;


	
	
	
$
j
s
o
n
 
=
 
$
c
l
i
e
n
t
-
>
r
e
q
u
e
s
t
(
'
G
E
T
'
,
 
$
t
h
i
s
-
>
q
u
e
r
y
_
s
t
r
i
n
g
)
-
>
g
e
t
B
o
d
y
(
)
-
>
g
e
t
C
o
n
t
e
n
t
s
(
)
;

	
	
}

	
	
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

	
	
	
$
j
o
m
r
e
s
_
u
s
e
r
_
f
e
e
d
b
a
c
k
 
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
o
m
r
e
s
_
u
s
e
r
_
f
e
e
d
b
a
c
k
'
)
;

	
	
	
$
j
o
m
r
e
s
_
u
s
e
r
_
f
e
e
d
b
a
c
k
-
>
c
o
n
s
t
r
u
c
t
_
m
e
s
s
a
g
e
(
a
r
r
a
y
(
'
m
e
s
s
a
g
e
'
=
>
'
C
o
u
l
d
 
n
o
t
 
g
e
t
 
c
u
r
r
e
n
c
y
 
e
x
c
h
a
n
g
e
 
r
a
t
e
s
'
,
 
'
c
s
s
_
c
l
a
s
s
'
=
>
'
a
l
e
r
t
-
d
a
n
g
e
r
 
a
l
e
r
t
-
e
r
r
o
r
'
)
)
;

	
	
}


 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
$
j
s
o
n
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
r
e
s
u
l
t
)
 
|
|
 
(
i
s
s
e
t
(
$
r
e
s
u
l
t
-
>
e
r
r
o
r
)
 
&
&
 
$
r
e
s
u
l
t
-
>
e
r
r
o
r
 
=
=
 
t
r
u
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
"
A
f
t
e
r
 
r
e
a
d
i
n
g
 
e
x
c
h
a
n
g
e
 
r
a
t
e
 
f
i
l
e
,
 
t
h
e
 
j
s
o
n
 
v
a
r
i
a
b
l
e
 
i
s
 
f
o
u
n
d
 
t
o
 
b
e
 
N
U
L
L
.
 
T
h
e
 
m
o
s
t
 
l
i
k
e
l
y
 
c
a
u
s
e
 
i
s
 
e
i
t
h
e
r
 
C
U
R
L
 
n
o
t
 
w
o
r
k
i
n
g
/
f
i
r
e
w
a
l
l
e
d
,
 
o
r
 
t
h
e
 
A
P
I
 
i
s
n
'
t
 
s
e
t
/
i
s
 
w
r
o
n
g
.
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
e
s
s
a
g
e
 
=
 
$
r
e
s
u
l
t
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


 
 
 
 
 
 
 
 
 
 
 
 
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
$
m
e
s
s
a
g
e
,
 
'
C
o
r
e
'
,
 
'
E
R
R
O
R
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

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
-
>
r
a
t
e
s
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

}

