
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
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
_
s
3
i
m
p
o
r
t

{

	
p
r
o
t
e
c
t
e
d
 
$
f
i
l
e
s
y
s
t
e
m
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
f
i
l
e
s
y
s
t
e
m
 
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
f
i
l
e
s
y
s
t
e
m
'
)
-
>
g
e
t
F
i
l
e
s
y
s
t
e
m
(
)
;

 
 
 
 
}


	
/
/
r
u
n
 
i
m
p
o
r
t
e
r

 
 
 
 
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
u
n
(
)

	
{

	
	
$
c
o
n
t
e
n
t
s
 
=
 
$
t
h
i
s
-
>
f
i
l
e
s
y
s
t
e
m
-
>
l
i
s
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
'
l
o
c
a
l
:
/
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
'
,
 
t
r
u
e
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
c
o
n
t
e
n
t
s
 
a
s
 
$
f
i
l
e
N
o
d
e
)
 
{

	
	
	
i
f
(
$
f
i
l
e
N
o
d
e
[
'
t
y
p
e
'
]
 
=
=
 
'
d
i
r
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
f
i
l
e
s
y
s
t
e
m
-
>
c
r
e
a
t
e
D
i
r
(
'
s
3
:
/
/
'
.
$
f
i
l
e
N
o
d
e
[
'
p
a
t
h
'
]
)
;

	
	
	
 
 
 
c
o
n
t
i
n
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
f
i
l
e
s
y
s
t
e
m
-
>
p
u
t
(

	
	
	
 
 
 
'
s
3
:
/
/
'
.
$
f
i
l
e
N
o
d
e
[
'
p
a
t
h
'
]
,

	
	
	
 
 
 
$
t
h
i
s
-
>
f
i
l
e
s
y
s
t
e
m
-
>
r
e
a
d
(
'
l
o
c
a
l
:
/
/
'
.
$
f
i
l
e
N
o
d
e
[
'
p
a
t
h
'
]
)

	
	
	
)
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

}

