
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
m
e
s
s
a
g
e
s

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
j
o
m
r
e
s
_
m
e
s
s
a
g
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
_
C
O
O
K
I
E
[
 
'
j
o
m
r
e
s
_
m
e
s
s
a
g
e
s
'
 
]
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
s
 
=
 
$
_
C
O
O
K
I
E
[
 
'
j
o
m
r
e
s
_
m
e
s
s
a
g
e
s
'
 
]
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
m
e
s
s
a
g
e
s
 
a
s
 
$
m
s
g
_
i
d
 
=
>
 
$
m
s
g
)
 
{

	
	
	
	
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
e
s
s
a
g
e
s
[
$
m
s
g
_
i
d
]
 
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
s
t
r
i
p
s
l
a
s
h
e
s
(
$
m
s
g
)
,
 
t
r
u
e
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
e
s
s
a
g
e
s
(
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
t
h
i
s
-
>
j
o
m
r
e
s
_
m
e
s
s
a
g
e
s
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
'
j
o
m
r
e
s
_
m
e
s
s
a
g
e
s
[
'
.
$
k
e
y
.
'
]
'
;

 
 
 
 
 
 
 
 
 
 
 
 
s
e
t
c
o
o
k
i
e
(
$
i
n
d
e
x
,
 
'
'
,
 
t
i
m
e
(
)
 
-
 
3
6
0
0
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
t
h
i
s
-
>
j
o
m
r
e
s
_
m
e
s
s
a
g
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
 
s
e
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
$
m
e
s
s
a
g
e
 
=
 
'
'
,
 
$
c
l
a
s
s
 
=
 
'
a
l
e
r
t
-
i
n
f
o
'
)

 
 
 
 
{

	
	
i
f
 
(
$
m
e
s
s
a
g
e
 
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
c
o
u
n
t
e
r
 
=
 
c
o
u
n
t
(
$
t
h
i
s
-
>
j
o
m
r
e
s
_
m
e
s
s
a
g
e
s
)
 
+
 
1
;

 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
'
j
o
m
r
e
s
_
m
e
s
s
a
g
e
s
[
'
.
$
c
o
u
n
t
e
r
.
'
]
'
;

	
	
$
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
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
$
m
e
s
s
a
g
e
)
,

	
	
	
'
c
l
a
s
s
'
 
=
>
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
$
c
l
a
s
s
)

	
	
)
;

 
 
 
 
 
 
 
 

	
	
s
e
t
c
o
o
k
i
e
(
$
i
n
d
e
x
,
 
j
s
o
n
_
e
n
c
o
d
e
(
$
d
a
t
a
,
 
J
S
O
N
_
H
E
X
_
A
P
O
S
 
|
 
J
S
O
N
_
H
E
X
_
Q
U
O
T
 
|
 
J
S
O
N
_
U
N
E
S
C
A
P
E
D
_
U
N
I
C
O
D
E
)
,
 
t
i
m
e
(
)
 
+
 
5
,
 
'
/
'
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

}

