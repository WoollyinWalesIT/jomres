
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
*
*

 
*
 
N
e
w
 
f
o
r
 
v
3
.
2
 
o
f
 
J
o
m
r
e
s
.
 
A
l
l
o
w
s
 
t
h
e
 
s
y
s
t
e
m
 
t
o
 
c
r
e
a
t
e
 
a
 
r
e
g
i
s
t
r
y
 
f
i
l
e
 
s
o
 
t
h
a
t
 
t
h
e
 
m
i
n
i
c
o
m
p
o
n
e
n
t
 
h
a
n
d
l
e
r
 
d
o
e
s
n
'
t
 
n
e
e
d
 
t
o
 
c
o
n
s
t
a
n
t
l
y
 
s
e
a
r
c
h
 
f
o
l
d
e
r
s
 
a
n
d
 
r
e
c
o
r
d
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
 
o
n
 
e
a
c
h
 
r
u
n
.

 
*
/

c
l
a
s
s
 
m
i
n
i
c
o
m
p
o
n
e
n
t
_
r
e
g
i
s
t
r
y

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
t
h
i
s
-
>
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
C
l
a
s
s
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
m
i
n
i
C
o
m
p
o
n
e
n
t
D
i
r
e
c
t
o
r
i
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
e
v
e
n
t
P
o
i
n
t
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
n
e
w
_
f
i
l
e
s
i
z
e
 
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
e
r
r
o
r
_
d
e
t
e
c
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

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
u
n
W
a
n
t
e
d
F
o
l
d
e
r
C
o
n
t
e
n
t
s
 
=
 
a
r
r
a
y
(
'
.
'
,
 
'
.
.
'
,
 
'
c
v
s
'
,
 
'
.
s
v
n
'
,
 
'
r
e
g
i
s
t
r
y
.
p
h
p
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
t
e
m
p
_
d
i
r
e
c
t
o
r
y
 
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
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
g
i
s
t
r
y
_
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
r
e
g
i
s
t
r
y
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
r
e
g
i
s
t
r
y
_
f
i
l
e
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
o
r
i
g
i
n
a
l
_
f
i
l
e
s
i
z
e
 
=
 
@
f
i
l
e
s
i
z
e
(
$
t
h
i
s
-
>
r
e
g
i
s
t
r
y
_
f
i
l
e
)
;

 
 
 
 
 
 
 
 
}
 
/
/
 
@
t
o
 
p
r
e
v
e
n
t
 
n
o
t
i
c
e
s
 
w
h
e
n
 
t
h
e
 
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
 
a
t
 
a
l
l

 
 
 
 
 
 
 
 
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
o
r
i
g
i
n
a
l
_
f
i
l
e
s
i
z
e
 
=
 
0
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
d
i
r
(
$
t
h
i
s
-
>
t
e
m
p
_
d
i
r
e
c
t
o
r
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
m
k
d
i
r
(
$
t
h
i
s
-
>
t
e
m
p
_
d
i
r
e
c
t
o
r
y
)
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
r
e
g
i
s
t
r
y
_
f
i
l
e
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
r
e
g
e
n
e
r
a
t
e
_
r
e
g
i
s
t
r
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
n
e
w
_
f
i
l
e
s
i
z
e
 
=
 
f
i
l
e
s
i
z
e
(
$
t
h
i
s
-
>
r
e
g
i
s
t
r
y
_
f
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
t
h
i
s
 
l
o
a
d
s
 
t
h
e
 
r
e
g
i
s
t
r
y
 
i
t
e
m
s
 
i
n
 
$
t
h
i
s
-
>
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
C
l
a
s
s
e
s
 
a
n
d
 
$
t
h
i
s
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
i
r
e
c
t
o
r
i
e
s

 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
g
i
s
t
r
y
_
f
i
l
e
;

 
 
 
 
 
 
 
 
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
c
l
a
s
s
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
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
C
l
a
s
s
e
s
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
m
i
n
i
c
o
m
p
o
n
e
n
t
_
d
i
r
e
c
t
o
r
i
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
i
r
e
c
t
o
r
i
e
s
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
 
r
e
g
e
n
e
r
a
t
e
_
r
e
g
i
s
t
r
y
(
$
f
o
r
c
e
_
r
e
l
o
a
d
_
a
l
l
o
w
e
d
 
=
 
f
a
l
s
e
)

 
 
 
 
{

	
	
i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{
 
/
/
 
W
e
 
d
o
n
'
t
 
w
a
n
t
 
t
o
 
d
o
 
t
h
i
s
 
i
f
 
t
h
e
 
i
n
s
t
a
l
l
e
r
 
i
s
 
r
u
n
n
i
n
g
 
t
h
i
s
 
s
c
r
i
p
t

	
	
	
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
j
a
v
a
s
c
r
i
p
t
'
,
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
R
E
L
P
A
T
H
.
'
b
l
o
c
k
u
i
-
n
p
m
/
'
,
 
'
j
q
u
e
r
y
.
b
l
o
c
k
U
I
.
j
s
'
)
;

	
	
}

	
	

 
 
 
 
 
 
 
 
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
s
a
f
e
_
m
o
d
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
s
a
f
e
_
m
o
d
e
'
 
]
 
=
 
'
0
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
C
l
a
s
s
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
m
i
n
i
C
o
m
p
o
n
e
n
t
D
i
r
e
c
t
o
r
i
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
g
e
t
M
i
n
i
C
o
m
p
o
n
e
n
t
C
o
r
e
C
l
a
s
s
e
s
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
g
e
t
M
i
n
i
C
o
m
p
o
n
e
n
t
C
M
S
S
p
e
c
i
f
i
c
C
l
a
s
s
e
s
(
)
;


 
 
 
 
 
 
 
 
i
f
 
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
s
a
f
e
_
m
o
d
e
'
 
]
 
=
=
 
'
0
'
)
 
{


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
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
g
e
t
M
i
n
i
C
o
m
p
o
n
e
n
t
C
m
s
T
e
m
p
l
a
t
e
C
l
a
s
s
e
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
a
s
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
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
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
a
v
e
_
r
e
g
i
s
t
r
y
_
f
i
l
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
n
e
w
_
f
i
l
e
s
i
z
e
 
=
 
f
i
l
e
s
i
z
e
(
$
t
h
i
s
-
>
r
e
g
i
s
t
r
y
_
f
i
l
e
)
;


 
 
 
 
 
 
 
 
/
/
d
e
l
e
t
e
 
j
s
 
f
i
l
e
s
 
i
n
 
/
j
o
m
r
e
s
/
t
e
m
p
 
d
i
r

	
	
$
t
a
s
k
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
t
a
s
k
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
a
s
k
 
=
=
 
'
r
e
b
u
i
l
d
r
e
g
i
s
t
r
y
'
 
|
|
 
$
t
a
s
k
 
=
=
 
'
s
a
v
e
_
s
i
t
e
_
s
e
t
t
i
n
g
s
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
a
v
a
s
c
r
i
p
t
_
f
i
l
e
s
_
i
n
_
t
e
m
p
_
d
i
r
 
=
 
s
c
a
n
d
i
r
_
g
e
t
f
i
l
e
s
(
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
,
 
$
e
x
t
e
n
s
i
o
n
 
=
 
'
j
s
'
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
j
a
v
a
s
c
r
i
p
t
_
f
i
l
e
s
_
i
n
_
t
e
m
p
_
d
i
r
 
a
s
 
$
f
i
l
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
l
i
n
k
(
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
$
f
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
d
e
l
e
t
e
 
i
n
s
t
a
l
l
e
d
 
a
n
d
 
r
e
m
o
t
e
 
p
l
u
g
i
n
s
 
c
a
c
h
e
d
 
l
i
s
t
s

	
	
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
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
)
 
{

	
	
	
u
n
l
i
n
k
(
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
i
n
s
t
a
l
l
e
d
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
;

	
	
}

	
	
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
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
)
 
{

	
	
	
u
n
l
i
n
k
(
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
r
e
m
o
t
e
_
p
l
u
g
i
n
s
_
d
a
t
a
.
p
h
p
'
)
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
 
t
h
e
 
c
l
a
s
s
e
s
 
r
e
g
i
s
t
r
y

	
	
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
r
e
g
i
s
t
r
y
_
c
l
a
s
s
e
s
.
p
h
p
'
)
)
 
{

	
	
	
u
n
l
i
n
k
(
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
r
e
g
i
s
t
r
y
_
c
l
a
s
s
e
s
.
p
h
p
'
)
;

	
	
}


 
 
 
 
 
 
 
 
/
/
r
e
b
u
i
l
d
 
t
h
e
 
s
h
o
r
t
c
o
d
e
s
 
l
i
s
t

 
 
 
 
 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
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
s
h
o
r
t
c
o
d
e
_
p
a
r
s
e
r
 
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
s
h
o
r
t
c
o
d
e
_
p
a
r
s
e
r
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
s
h
o
r
t
c
o
d
e
_
p
a
r
s
e
r
-
>
b
u
i
l
d
_
s
h
o
r
t
c
o
d
e
s
(
$
f
o
r
c
e
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
r
e
l
o
a
d
 
p
a
g
e
 
i
f
 
r
e
g
i
s
t
r
y
 
c
h
a
n
g
e
d

 
 
 
 
 
 
 
 
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
o
r
i
g
i
n
a
l
_
f
i
l
e
s
i
z
e
 
!
=
 
$
t
h
i
s
-
>
n
e
w
_
f
i
l
e
s
i
z
e
 
&
&
 
$
f
o
r
c
e
_
r
e
l
o
a
d
_
a
l
l
o
w
e
d
)
 
{

	
	
	
i
f
 
(
!
d
e
f
i
n
e
d
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
)
)
 
{
 
/
/
 
W
e
 
d
o
n
'
t
 
w
a
n
t
 
t
o
 
d
o
 
t
h
i
s
 
i
f
 
t
h
e
 
i
n
s
t
a
l
l
e
r
 
i
s
 
r
u
n
n
i
n
g
 
t
h
i
s
 
s
c
r
i
p
t

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
"
<
s
c
r
i
p
t
>
	
j
o
m
r
e
s
J
q
u
e
r
y
.
b
l
o
c
k
U
I
(
{
 

	
	
	
m
e
s
s
a
g
e
:
 
'
<
h
3
>
R
e
l
o
a
d
i
n
g
 
t
h
e
 
p
a
g
e
 
a
s
 
t
h
e
 
r
e
g
i
s
t
r
y
 
h
a
s
 
c
h
a
n
g
e
d
<
/
h
3
>
'
,

	
	
	
b
a
s
e
Z
:
 
1
0
3
0
,

	
	
	
c
s
s
:
 
{

	
	
	
	
b
o
r
d
e
r
:
 
'
n
o
n
e
'
,
 

	
	
	
	
p
a
d
d
i
n
g
:
 
'
1
5
p
x
'
,
 

	
	
	
	
b
a
c
k
g
r
o
u
n
d
C
o
l
o
r
:
 
'
#
0
0
0
'
,
 

	
	
	
	
'
-
w
e
b
k
i
t
-
b
o
r
d
e
r
-
r
a
d
i
u
s
'
:
 
'
1
0
p
x
'
,
 

	
	
	
	
'
-
m
o
z
-
b
o
r
d
e
r
-
r
a
d
i
u
s
'
:
 
'
1
0
p
x
'
,
 

	
	
	
	
o
p
a
c
i
t
y
:
 
.
8
,
 

	
	
	
	
c
o
l
o
r
:
 
'
#
f
f
f
'
 

	
	
	
}
 
}
)
;
<
/
s
c
r
i
p
t
>
"
;

	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
s
c
r
i
p
t
>
w
i
n
d
o
w
.
l
o
c
a
t
i
o
n
.
r
e
l
o
a
d
(
)
;
<
/
s
c
r
i
p
t
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
s
a
v
e
_
r
e
g
i
s
t
r
y
_
f
i
l
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
e
x
i
s
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
r
e
g
i
s
t
r
y
_
f
i
l
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
u
n
l
i
n
k
(
$
t
h
i
s
-
>
r
e
g
i
s
t
r
y
_
f
i
l
e
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
C
o
u
l
d
 
n
o
t
 
d
e
l
e
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
 
r
e
g
i
s
t
r
y
 
f
i
l
e
 
 
:
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
r
e
g
i
s
t
r
y
_
f
i
l
e
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
e
x
i
s
t
e
d
 
=
 
t
r
u
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
m
i
n
i
C
o
m
p
o
n
e
n
t
D
i
r
e
c
t
o
r
i
e
s
 
=
 
a
r
r
a
y
_
u
n
i
q
u
e
(
$
t
h
i
s
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
i
r
e
c
t
o
r
i
e
s
)
;

	
	
s
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
m
i
n
i
C
o
m
p
o
n
e
n
t
D
i
r
e
c
t
o
r
i
e
s
)
;

	
	

	
	
/
/
s
o
r
t
 
b
y
 
e
v
e
n
t
P
o
i
n
t

	
	
k
s
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
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
)
;

	
	

	
	
/
/
s
o
r
t
 
b
y
 
e
v
e
n
t
N
a
m
e

	
	
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
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
C
l
a
s
s
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

	
	
	
k
s
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
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
$
k
]
)
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
r
e
g
i
s
t
r
y
_
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
e
g
i
s
t
e
r
e
d
C
l
a
s
s
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
e
g
i
s
t
e
r
e
d
C
l
a
s
s
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

$
t
h
i
s
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
i
r
e
c
t
o
r
i
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
m
i
n
i
C
o
m
p
o
n
e
n
t
D
i
r
e
c
t
o
r
i
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
r
e
g
i
s
t
r
y
_
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
 
I
f
 
t
h
i
s
 
i
s
 
J
o
o
m
l
a
 
w
e
'
l
l
 
a
l
s
o
 
s
c
a
n
 
t
h
e
 
J
o
o
m
l
a
 
t
e
m
p
l
a
t
e
'
s
 
h
t
m
l
/
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
 
d
i
r
 
f
o
r
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
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
M
i
n
i
C
o
m
p
o
n
e
n
t
C
m
s
T
e
m
p
l
a
t
e
C
l
a
s
s
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
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
 
&
&
 
!
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
w
o
r
d
p
r
e
s
s
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
d
b
 
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
D
B
O
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
S
E
L
E
C
T
 
`
t
e
m
p
l
a
t
e
`
 
F
R
O
M
 
#
_
_
t
e
m
p
l
a
t
e
_
s
t
y
l
e
s
 
W
H
E
R
E
 
`
c
l
i
e
n
t
_
i
d
`
 
=
 
0
 
A
N
D
 
`
h
o
m
e
`
 
=
 
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
b
-
>
s
e
t
Q
u
e
r
y
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
l
a
t
e
N
a
m
e
 
=
 
$
d
b
-
>
l
o
a
d
R
e
s
u
l
t
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
e
P
a
t
h
 
=
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
'
t
e
m
p
l
a
t
e
s
'
.
J
R
D
S
.
$
t
e
m
p
l
a
t
e
N
a
m
e
.
J
R
D
S
.
'
h
t
m
l
'
.
J
R
D
S
.
'
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
'
.
J
R
D
S
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
w
o
r
d
p
r
e
s
s
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
e
P
a
t
h
 
=
 
g
e
t
_
s
t
y
l
e
s
h
e
e
t
_
d
i
r
e
c
t
o
r
y
(
)
.
J
R
D
S
.
'
h
t
m
l
'
.
J
R
D
S
.
'
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
'
.
J
R
D
S
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
d
 
=
 
@
d
i
r
(
$
j
r
e
P
a
t
h
)
;

 
 
 
 
 
 
 
 
$
d
o
c
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
$
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
e
n
t
r
y
 
=
 
$
d
-
>
r
e
a
d
(
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
n
a
m
e
 
=
 
$
e
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
u
b
s
t
r
(
$
e
n
t
r
y
,
 
0
,
 
1
)
 
!
=
 
'
.
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
o
c
s
[
 
]
 
=
 
$
e
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
d
-
>
c
l
o
s
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
d
o
c
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
o
r
t
(
$
d
o
c
s
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
d
o
c
s
 
a
s
 
$
d
o
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
s
t
d
i
r
 
=
 
$
j
r
e
P
a
t
h
.
$
d
o
c
.
J
R
D
S
;

	
	
	
	
	
i
f
 
(
i
s
_
d
i
r
(
$
l
i
s
t
d
i
r
)
)
 
{

	
	
	
	
	
	
$
d
r
 
=
 
@
d
i
r
(
$
l
i
s
t
d
i
r
)
;

	
	
	
	
	
	
i
f
 
(
$
d
r
)
 
{

	
	
	
	
	
	
	
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
e
n
t
r
y
 
=
 
$
d
r
-
>
r
e
a
d
(
)
)
)
 
{

	
	
	
	
	
	
	
	
$
f
i
l
e
n
a
m
e
 
=
 
$
e
n
t
r
y
;

	
	
	
	
	
	
	
	
$
t
h
i
s
-
>
r
e
g
i
s
t
e
r
C
o
m
p
o
n
e
n
t
F
i
l
e
(
$
l
i
s
t
d
i
r
,
 
$
f
i
l
e
n
a
m
e
,
 
'
c
m
s
t
e
m
p
l
a
t
e
'
)
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
$
d
r
-
>
c
l
o
s
e
(
)
;

	
	
	
	
	
	
}

	
	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
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
M
i
n
i
C
o
m
p
o
n
e
n
t
C
M
S
S
p
e
c
i
f
i
c
C
l
a
s
s
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
j
r
e
P
a
t
h
 
=
 
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
;

 
 
 
 
 
 
 
 
$
d
 
=
 
@
d
i
r
(
$
j
r
e
P
a
t
h
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
e
n
t
r
y
 
=
 
$
d
-
>
r
e
a
d
(
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
n
a
m
e
 
=
 
$
e
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
g
i
s
t
e
r
C
o
m
p
o
n
e
n
t
F
i
l
e
(
$
j
r
e
P
a
t
h
,
 
$
f
i
l
e
n
a
m
e
,
 
'
c
m
s
_
s
p
e
c
i
f
i
c
_
c
o
m
p
o
n
e
n
t
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
d
-
>
c
l
o
s
e
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
R
e
a
d
s
 
i
n
 
c
l
a
s
s
 
f
i
l
e
s
 
f
r
o
m
 
t
h
e
 
e
v
e
n
t
s
 
f
o
l
d
e
r
 
a
n
d
 
i
n
s
e
r
t
s
 
t
h
e
m
 
i
n
t
o
 
t
h
e
 
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
C
l
a
s
s
e
s
 
a
r
r
a
y

 
 
 
 
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
M
i
n
i
C
o
m
p
o
n
e
n
t
C
o
r
e
C
l
a
s
s
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
l
i
s
t
d
i
r
 
=
 
J
O
M
R
E
S
_
A
P
P
_
A
B
S
P
A
T
H
;

 
 
 
 
 
 
 
 
$
d
 
=
 
@
d
i
r
(
$
l
i
s
t
d
i
r
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
e
n
t
r
y
 
=
 
$
d
-
>
r
e
a
d
(
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
n
a
m
e
 
=
 
$
e
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
g
i
s
t
e
r
C
o
m
p
o
n
e
n
t
F
i
l
e
(
$
l
i
s
t
d
i
r
,
 
$
f
i
l
e
n
a
m
e
,
 
'
c
o
r
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
d
-
>
c
l
o
s
e
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
r
e
g
i
s
t
e
r
C
o
m
p
o
n
e
n
t
F
i
l
e
(
$
f
i
l
e
P
a
t
h
,
 
$
f
i
l
e
n
a
m
e
,
 
$
e
v
e
n
t
T
y
p
e
 
=
 
'
c
o
m
p
o
n
e
n
t
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
t
r
i
p
p
e
d
N
a
m
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
.
'
,
 
'
'
,
 
$
f
i
l
e
n
a
m
e
)
;

 
 
 
 
 
 
 
 
$
s
t
r
i
p
p
e
d
N
a
m
e
 
=
 
s
u
b
s
t
r
(
$
s
t
r
i
p
p
e
d
N
a
m
e
,
 
0
,
 
-
8
)
;


 
 
 
 
 
 
 
 
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
 
=
 
s
u
b
s
t
r
(
$
s
t
r
i
p
p
e
d
N
a
m
e
,
 
1
,
 
5
)
;


 
 
 
 
 
 
 
 
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
N
a
m
e
 
=
 
s
u
b
s
t
r
(
$
s
t
r
i
p
p
e
d
N
a
m
e
,
 
6
)
;

 
 
 
 
 
 
 
 

	
	
$
p
a
t
h
_
p
a
r
t
s
 
=
 
p
a
t
h
i
n
f
o
(
$
f
i
l
e
P
a
t
h
.
$
f
i
l
e
n
a
m
e
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
p
a
t
h
_
p
a
r
t
s
[
 
'
e
x
t
e
n
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
e
x
t
e
n
s
i
o
n
 
=
 
$
p
a
t
h
_
p
a
r
t
s
[
 
'
e
x
t
e
n
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
_
f
i
l
e
(
$
f
i
l
e
P
a
t
h
.
$
f
i
l
e
n
a
m
e
)
 
&
&
 

	
	
	
!
i
n
_
a
r
r
a
y
(
s
t
r
t
o
l
o
w
e
r
(
$
f
i
l
e
n
a
m
e
)
,
 
$
t
h
i
s
-
>
u
n
W
a
n
t
e
d
F
o
l
d
e
r
C
o
n
t
e
n
t
s
)
 
&
&
 

	
	
	
(
i
n
t
)
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
 
>
 
0
 
&
&
 

	
	
	
(
i
n
t
)
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
 
<
=
 
9
9
9
9
9
 
&
&
 

	
	
	
s
t
r
t
o
l
o
w
e
r
(
$
e
x
t
e
n
s
i
o
n
)
 
=
=
 
'
p
h
p
'

	
	
	
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
t
h
i
s
-
>
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
C
l
a
s
s
e
s
[
 
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
]
[
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
N
a
m
e
]
)
 
&
&
 

	
	
	
	
(
$
t
h
i
s
-
>
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
C
l
a
s
s
e
s
[
 
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
 
]
[
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
N
a
m
e
]
[
 
'
e
v
e
n
t
t
y
p
e
'
 
]
 
=
=
 
'
c
o
m
p
o
n
e
n
t
'
 
|
|

	
	
	
	
$
t
h
i
s
-
>
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
C
l
a
s
s
e
s
[
 
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
 
]
[
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
N
a
m
e
]
[
 
'
e
v
e
n
t
t
y
p
e
'
 
]
 
=
=
 
'
r
e
m
o
t
e
c
o
m
p
o
n
e
n
t
'
 
|
|

	
	
	
	
$
t
h
i
s
-
>
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
C
l
a
s
s
e
s
[
 
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
 
]
[
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
N
a
m
e
]
[
 
'
e
v
e
n
t
t
y
p
e
'
 
]
 
=
=
 
'
c
m
s
_
s
p
e
c
i
f
i
c
_
c
o
m
p
o
n
e
n
t
'
 
)

	
	
	
	
)
 
{

	
	
	
	
$
t
e
x
t
 
=
 
'
'
;

	
	
	
	
$
t
e
x
t
 
.
=
 
'
<
f
o
n
t
 
c
o
l
o
r
=
"
r
e
d
"
 
f
a
c
e
=
"
a
r
i
a
l
"
 
s
i
z
e
=
"
1
"
>
W
a
r
n
i
n
g
:
 
E
v
e
n
t
 
o
v
e
r
r
i
d
e
 
c
o
l
l
i
s
i
o
n
.
 
Y
o
u
 
h
a
v
e
 
t
w
o
 
o
r
 
m
o
r
e
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
s
 
a
t
t
e
m
p
t
i
n
g
 
t
o
 
p
e
r
f
o
r
m
 
t
h
e
 
s
a
m
e
 
o
v
e
r
r
i
d
e
 
f
u
n
c
t
i
o
n
.
 
S
y
s
t
e
m
 
b
e
h
a
v
i
o
u
r
 
m
a
y
 
b
e
 
u
n
p
r
e
d
i
c
t
a
b
l
e
'
.
'
<
/
f
o
n
t
>
<
b
r
>
'
;

	
	
	
	
$
t
e
x
t
 
.
=
 
'
<
b
>
'
.
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
.
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
N
a
m
e
.
'
<
/
b
>
<
b
r
>
'
;

	
	
	
	
$
t
e
x
t
 
.
=
 
'
<
b
>
'
.
$
t
h
i
s
-
>
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
C
l
a
s
s
e
s
[
 
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
 
]
[
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
N
a
m
e
]
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
'
<
/
b
>
<
b
r
>
'
;

	
	
	
	
$
t
e
x
t
 
.
=
 
'
C
o
l
l
i
d
e
s
 
w
i
t
h
 
t
h
i
s
 
a
n
d
 
p
o
s
s
i
b
l
y
 
m
o
r
e
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
s
:
 
'
.
'
<
b
r
>
'
;

	
	
	
	
$
t
e
x
t
 
.
=
 
'
<
b
>
'
.
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
.
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
N
a
m
e
.
'
<
/
b
>
<
b
r
>
'
;

	
	
	
	
$
t
e
x
t
 
.
=
 
'
<
b
>
'
.
$
f
i
l
e
P
a
t
h
.
'
<
/
b
>
<
b
r
>
'
;

	
	
	
	
e
c
h
o
 
$
t
e
x
t
;

	
	
	
	
$
t
h
i
s
-
>
e
r
r
o
r
_
d
e
t
e
c
t
e
d
 
=
 
t
r
u
e
;

	
	
	
	
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
i
n
i
c
o
m
p
o
n
e
n
t
 
c
o
l
l
i
s
i
o
n
 
:
:
 
'
.
$
t
e
x
t
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
m
i
n
i
C
o
m
p
o
n
e
n
t
D
i
r
e
c
t
o
r
i
e
s
[
 
]
 
=
 
$
f
i
l
e
P
a
t
h
;

	
	
	
$
t
h
i
s
-
>
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
C
l
a
s
s
e
s
[
 
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
P
o
i
n
t
 
]
[
$
c
l
a
s
s
f
i
l
e
E
v
e
n
t
N
a
m
e
]
 
=
 
a
r
r
a
y
(
'
f
i
l
e
p
a
t
h
'
 
=
>
 
$
f
i
l
e
P
a
t
h
,
 
'
e
v
e
n
t
t
y
p
e
'
 
=
>
 
$
e
v
e
n
t
T
y
p
e
)
;

	
	
}

 
 
 
 
}

}

