
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
r
e
r
u
n
_
p
l
u
g
i
n
_
i
n
s
t
a
l
l
e
r
_
s
c
r
i
p
t

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
l
u
g
i
n
 
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
p
l
u
g
i
n
'
,
 
'
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
t
r
i
g
g
e
r
=
>
$
p
l
u
g
i
n
s
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
p
l
u
g
i
n
s
 
a
s
 
$
p
l
u
g
i
n
_
n
a
m
e
 
=
>
 
$
p
l
u
g
i
n
_
i
n
f
o
 
)
 
{

	
	
	
	
i
f
 
(
$
p
l
u
g
i
n
_
n
a
m
e
 
=
=
 
$
p
l
u
g
i
n
 
)
 
{

	
	
	
	
	
$
p
a
t
h
 
=
 
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
t
r
i
g
g
e
r
]
[
$
p
l
u
g
i
n
_
n
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
p
a
t
h
.
"
p
l
u
g
i
n
_
i
n
s
t
a
l
l
.
p
h
p
"
)
)
 
{

	
	
	
	
	
	
d
e
f
i
n
e
(
"
J
O
M
R
E
S
_
I
N
S
T
A
L
L
E
R
"
,
1
)
;

	
	
	
	
	
	
r
e
q
u
i
r
e
(
$
p
a
t
h
.
"
p
l
u
g
i
n
_
i
n
s
t
a
l
l
.
p
h
p
"
)
;

	
	
	
	
	
	
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
A
D
M
I
N
.
'
&
t
a
s
k
=
s
h
o
w
p
l
u
g
i
n
s
'
)
,
 
'
I
n
s
t
a
l
l
 
s
c
r
i
p
t
 
h
a
s
 
b
e
e
n
 
r
e
-
r
u
n
'
)
;

	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
e
c
h
o
 
"
O
o
p
s
,
 
t
h
e
 
f
i
l
e
 
"
.
$
p
a
t
h
.
"
p
l
u
g
i
n
_
i
n
s
t
a
l
l
.
p
h
p
"
.
"
 
d
o
e
s
 
n
o
t
 
e
x
i
s
t
"
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
}

	
	

/
*
 
	
	
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
)
)
 
{

	
	
	

	
	
}
 
*
/


 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
A
D
M
I
N
.
'
&
t
a
s
k
=
s
h
o
w
p
l
u
g
i
n
s
'
)
,
 
'
'
)
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

