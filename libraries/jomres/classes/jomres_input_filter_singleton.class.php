
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
o
m
r
e
s
_
i
n
p
u
t
_
f
i
l
t
e
r
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
p
u
r
i
f
i
e
r
_
n
o
_
h
t
m
l
 
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
p
u
r
i
f
i
e
r
_
a
l
l
o
w
_
h
t
m
l
 
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
i
n
i
t
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
 
_
_
c
l
o
n
e
(
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
C
l
o
n
i
n
g
 
n
o
t
 
a
l
l
o
w
e
d
 
o
n
 
a
 
s
i
n
g
l
e
t
o
n
 
o
b
j
e
c
t
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

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
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
h
t
m
l
_
p
u
r
i
f
i
e
r
_
a
l
l
o
w
e
d
_
t
a
g
s
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
h
t
m
l
_
p
u
r
i
f
i
e
r
_
a
l
l
o
w
e
d
_
t
a
g
s
'
 
]
 
=
 
'
p
,
b
,
s
t
r
o
n
g
,
a
[
h
r
e
f
]
,
i
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*
 
i
f
 
(
!
c
l
a
s
s
_
e
x
i
s
t
s
(
'
H
T
M
L
P
u
r
i
f
i
e
r
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
L
I
B
R
A
R
I
E
S
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
h
t
m
l
p
u
r
i
f
i
e
r
'
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
p
u
r
i
f
i
e
r
-
4
.
4
.
0
-
s
t
a
n
d
a
l
o
n
e
'
.
J
R
D
S
.
'
H
T
M
L
P
u
r
i
f
i
e
r
.
s
t
a
n
d
a
l
o
n
e
.
p
h
p
'
;

 
 
 
 
 
 
 
 
}
 
*
/


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
 
=
 
H
T
M
L
P
u
r
i
f
i
e
r
_
C
o
n
f
i
g
:
:
c
r
e
a
t
e
D
e
f
a
u
l
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
-
>
s
e
t
(
'
H
T
M
L
.
A
l
l
o
w
e
d
'
,
 
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
h
t
m
l
_
p
u
r
i
f
i
e
r
_
a
l
l
o
w
e
d
_
t
a
g
s
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
p
u
r
i
f
i
e
r
_
a
l
l
o
w
_
h
t
m
l
 
=
 
n
e
w
 
H
T
M
L
P
u
r
i
f
i
e
r
(
$
c
o
n
f
i
g
)
;


	
	
$
c
o
n
f
i
g
 
=
 
H
T
M
L
P
u
r
i
f
i
e
r
_
C
o
n
f
i
g
:
:
c
r
e
a
t
e
D
e
f
a
u
l
t
(
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
-
>
s
e
t
(
'
H
T
M
L
.
A
l
l
o
w
e
d
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
p
u
r
i
f
i
e
r
_
n
o
_
h
t
m
l
 
=
 
n
e
w
 
H
T
M
L
P
u
r
i
f
i
e
r
(
$
c
o
n
f
i
g
)
;

	
	

	
	
u
n
s
e
t
(
$
c
o
n
f
i
g
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
 
p
u
r
i
f
y
(
$
d
i
r
t
y
,
 
$
a
l
l
o
w
_
h
t
m
l
 
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
$
a
l
l
o
w
_
h
t
m
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
e
a
n
 
=
 
$
t
h
i
s
-
>
p
u
r
i
f
i
e
r
_
n
o
_
h
t
m
l
-
>
p
u
r
i
f
y
(
$
d
i
r
t
y
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
e
a
n
 
=
 
$
t
h
i
s
-
>
p
u
r
i
f
i
e
r
_
a
l
l
o
w
_
h
t
m
l
-
>
p
u
r
i
f
y
(
$
d
i
r
t
y
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
c
l
e
a
n
;

 
 
 
 
}

}

