
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
1
6
0
0
0
a
j
a
x
_
l
i
s
t
_
p
r
o
p
e
r
t
i
e
s
_
a
p
p
r
o
v
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

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
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
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
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
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
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
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
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
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
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
 
(
i
n
t
)
 
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
,
 
0
)
;

 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
e
d
 
=
 
(
i
n
t
)
 
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
a
p
p
r
o
v
e
d
'
,
 
0
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
p
r
o
p
e
r
t
i
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
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
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
p
r
o
p
e
r
t
i
e
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
s
_
u
i
d
 
=
 
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
;

	
	
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
i
e
s
-
>
s
e
t
A
p
p
r
o
v
e
d
(
$
a
p
p
r
o
v
e
d
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
a
p
p
r
o
v
e
d
 
=
=
 
0
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
p
r
o
p
e
r
t
i
e
s
-
>
s
e
t
P
u
b
l
i
s
h
e
d
(
0
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
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
b
a
s
i
c
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
'
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
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
;


 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
m
a
i
l
f
r
o
m
 
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
'
m
a
i
l
f
r
o
m
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
C
o
n
f
i
g
_
f
r
o
m
n
a
m
e
 
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
'
f
r
o
m
n
a
m
e
'
)
;


 
 
 
 
 
 
 
 
$
l
i
n
k
 
=
 
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
,
'
n
o
s
e
f
'
)
;


 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
a
p
p
r
o
v
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
1
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
j
o
m
r
e
s
M
a
i
l
e
r
(
$
j
o
m
r
e
s
C
o
n
f
i
g
_
m
a
i
l
f
r
o
m
,
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
f
r
o
m
n
a
m
e
,
 
$
c
u
r
r
e
n
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
e
m
a
i
l
,
 
j
r
_
g
e
t
t
e
x
t
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
A
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
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
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
f
a
l
s
e
)
,
 
j
r
_
g
e
t
t
e
x
t
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
A
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
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
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
f
a
l
s
e
)
.
$
l
i
n
k
,
 
$
m
o
d
e
 
=
 
1
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
F
a
i
l
u
r
e
 
i
n
 
s
e
n
d
i
n
g
 
a
p
p
r
o
v
a
l
 
e
m
a
i
l
 
t
o
 
h
o
t
e
l
.
 
T
a
r
g
e
t
 
a
d
d
r
e
s
s
:
 
'
.
$
c
u
r
r
e
n
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
e
m
a
i
l
.
'
 
S
u
b
j
e
c
t
 
'
.
j
r
_
g
e
t
t
e
x
t
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
A
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
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
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
0
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
j
o
m
r
e
s
M
a
i
l
e
r
(
$
j
o
m
r
e
s
C
o
n
f
i
g
_
m
a
i
l
f
r
o
m
,
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
f
r
o
m
n
a
m
e
,
 
$
c
u
r
r
e
n
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
e
m
a
i
l
,
 
j
r
_
g
e
t
t
e
x
t
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
A
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
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
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
f
a
l
s
e
)
,
 
j
r
_
g
e
t
t
e
x
t
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
A
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
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
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
C
O
N
T
E
N
T
'
,
 
f
a
l
s
e
)
.
$
l
i
n
k
,
 
$
m
o
d
e
 
=
 
1
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
F
a
i
l
u
r
e
 
i
n
 
s
e
n
d
i
n
g
 
u
n
a
p
p
r
o
v
a
l
 
e
m
a
i
l
 
t
o
 
h
o
t
e
l
.
 
T
a
r
g
e
t
 
a
d
d
r
e
s
s
:
 
'
.
$
c
u
r
r
e
n
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
e
m
a
i
l
.
'
 
S
u
b
j
e
c
t
 
'
.
j
r
_
g
e
t
t
e
x
t
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
A
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
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
P
P
R
O
V
A
L
S
_
M
A
N
A
G
E
R
_
E
M
A
I
L
_
S
U
B
J
E
C
T
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
e
c
h
o
 
'
A
p
p
r
o
v
a
l
 
s
t
a
t
u
s
 
c
h
a
n
g
e
d
 
t
o
 
'
.
$
a
p
p
r
o
v
e
d
;

 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
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
R
e
t
V
a
l
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
 
n
u
l
l
;

 
 
 
 
}

}

