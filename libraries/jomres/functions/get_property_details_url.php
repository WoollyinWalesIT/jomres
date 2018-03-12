
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
 
T
h
e
 
p
u
r
p
o
s
e
 
o
f
 
t
h
i
s
 
f
u
n
c
t
i
o
n
 
i
s
 
t
o
 
a
l
l
o
w
 
u
s
 
t
o
 
o
v
e
r
r
i
d
e
 
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
 
d
e
t
a
i
l
s
 
p
a
g
e
 
l
i
n
k
 
p
r
o
g
r
a
m
a
t
i
c
a
l
l
y
.

/
/
 
T
y
p
e
s
:

/
/
 
s
e
f
:
 
s
e
f
 
u
r
l

/
/
 
n
o
s
e
f
:
 
n
o
 
s
e
f
 
u
r
l

/
/
 
s
e
f
s
a
f
e
:
 
s
e
f
 
u
r
l
 
n
o
t
 
p
a
s
s
e
d
 
t
h
r
o
u
g
h
 
j
o
m
r
e
s
U
R
L
 
f
u
n
c
t
i
o
n

/
/
 
a
j
a
x
:
 
a
j
a
x
 
s
a
f
e
 
u
r
l


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
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
_
u
r
l
(
$
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
,
 
$
t
y
p
e
 
=
 
'
s
e
f
'
,
 
$
p
a
r
a
m
s
 
=
 
'
'
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
 
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
'
)
;

	

	
i
f
 
(
!
$
j
o
m
r
e
s
_
a
c
c
e
s
s
_
c
o
n
t
r
o
l
-
>
t
h
i
s
_
u
s
e
r
_
c
a
n
(
'
v
i
e
w
p
r
o
p
e
r
t
y
'
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


	
s
w
i
t
c
h
(
$
t
y
p
e
)
 
{

	
	
c
a
s
e
 
'
s
e
f
'
:

	
	
	
$
u
r
l
 
=
 
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
v
i
e
w
p
r
o
p
e
r
t
y
&
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
'
.
$
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
$
p
a
r
a
m
s
)
;

	
	
	
b
r
e
a
k
;

	
	
c
a
s
e
 
'
n
o
s
e
f
'
:

	
	
	
$
u
r
l
 
=
 
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
N
O
S
E
F
.
'
&
t
a
s
k
=
v
i
e
w
p
r
o
p
e
r
t
y
&
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
'
.
$
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
$
p
a
r
a
m
s
)
;

	
	
	
b
r
e
a
k
;

	
	
c
a
s
e
 
'
s
e
f
s
a
f
e
'
:

	
	
	
$
u
r
l
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
v
i
e
w
p
r
o
p
e
r
t
y
&
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
'
.
$
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
$
p
a
r
a
m
s
;

	
	
	
b
r
e
a
k
;

	
	
c
a
s
e
 
'
a
j
a
x
'
:

	
	
	
$
u
r
l
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
J
A
X
.
'
&
t
a
s
k
=
v
i
e
w
p
r
o
p
e
r
t
y
&
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
'
.
$
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
$
p
a
r
a
m
s
;

	
	
	
b
r
e
a
k
;

	
	
d
e
f
a
u
l
t
:

	
	
	
$
u
r
l
 
=
 
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
v
i
e
w
p
r
o
p
e
r
t
y
&
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
'
.
$
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
$
p
a
r
a
m
s
)
;

	
	
	
b
r
e
a
k
;

	
}

	

	
/
/
i
f
 
w
e
 
h
a
v
e
 
a
 
j
o
o
m
l
a
 
m
e
n
u
 
o
f
 
t
y
p
e
 
p
r
o
p
e
r
t
y
d
e
t
a
i
l
s
 
c
r
e
a
t
e
d
 
f
o
r
 
t
h
i
s
 
s
p
e
c
i
f
i
c
 
p
r
o
p
e
r
t
y
,
 
t
h
e
n
 
w
e
`
l
l
 
u
s
e
 
t
h
a
t
 
u
r
l
 
i
n
s
e
t
a
d
,
 
t
 
a
v
o
i
d
 
d
u
p
l
i
c
a
t
e
s
.
 
T
h
i
s
 
a
l
l
o
w
s
 
a
l
o
w
s
 
u
s
 
h
a
v
i
n
g
 
m
o
d
u
l
e
s
 
a
s
s
i
g
n
e
d
 
o
n
l
y
 
t
o
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s
 
p
a
g
e
.

	
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
)
)
 
{

	
	
$
a
p
p
 
=
 
J
F
a
c
t
o
r
y
:
:
g
e
t
A
p
p
l
i
c
a
t
i
o
n
(
)
;
 

	
	
$
m
e
n
u
 
=
 
$
a
p
p
-
>
g
e
t
M
e
n
u
(
)
;

	
	
$
m
e
n
u
I
t
e
m
 
=
 
$
m
e
n
u
-
>
g
e
t
I
t
e
m
s
(
 
'
l
i
n
k
'
,
 
'
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
&
v
i
e
w
=
d
e
f
a
u
l
t
&
l
a
y
o
u
t
=
p
r
o
p
e
r
t
y
d
e
t
a
i
l
s
&
s
e
l
e
c
t
e
d
_
p
r
o
p
e
r
t
y
=
'
.
$
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
,
 
$
f
i
r
s
t
o
n
l
y
 
=
 
t
r
u
e
 
)
;

	
	
i
f
 
(
$
m
e
n
u
I
t
e
m
)
 
{

	
	
	
i
f
 
(
$
t
y
p
e
 
=
=
 
'
s
e
f
'
 
|
|
 
$
t
y
p
e
 
=
=
 
'
s
e
f
s
a
f
e
'
)
 
{

	
	
	
	
$
u
r
l
 
=
 
J
R
o
u
t
e
:
:
_
(
$
m
e
n
u
I
t
e
m
-
>
l
i
n
k
.
'
&
I
t
e
m
i
d
=
'
.
$
m
e
n
u
I
t
e
m
-
>
i
d
)
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
u
r
l
 
=
 
j
o
m
r
e
s
U
R
L
(
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
'
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
$
m
e
n
u
I
t
e
m
-
>
l
i
n
k
.
'
&
I
t
e
m
i
d
=
'
.
$
m
e
n
u
I
t
e
m
-
>
i
d
)
;

	
	
	
}

	
	
}

	
}

	

 
 
 
 
r
e
t
u
r
n
 
$
u
r
l
;

}

